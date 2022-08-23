<?php
declare(strict_types=1);

namespace App\Jobs;

use App\Transfers\LeadTransfer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

final class VtigerWebhookJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 0;

    public function __construct(
        protected LeadTransfer $leadTransfer
    )
    {
    }

    public function retryUntil(): \Illuminate\Support\Carbon
    {
        return now()->addDay();
    }

    public function handle(): void
    {
        $data = $this->leadTransfer->toArray();
        $data['portal_id'] = $this->leadTransfer->id;
        unset($data['id']);
        $response = Http::timeout(5)->post(config('services.lead_webhook'), $data);
        if ($response->failed()) {
            $this->release(
                now()->addMinutes(15 * $this->attempts())
            );
        }
    }

    public function failed(\Exception $e): void
    {
        Log::error('Failed to send Lead to Vtiger with id: ' . $this->leadTransfer->id . ' Error:' . $e->getMessage());
    }
}
