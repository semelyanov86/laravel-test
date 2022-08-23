<?php

declare(strict_types=1);

namespace App\Actions;

use App\Jobs\VtigerWebhookJob;
use App\Models\Lead;
use App\Transfers\LeadTransfer;
use Lorisleiva\Actions\Concerns\AsAction;

final class StoreLeadAction
{
    use AsAction;

    public function handle(LeadTransfer $transfer): LeadTransfer
    {
        $leadModel = Lead::create($transfer->toArray());
        $transfer->id = $leadModel->id;
        VtigerWebhookJob::dispatch($transfer);
        return $transfer;
    }
}
