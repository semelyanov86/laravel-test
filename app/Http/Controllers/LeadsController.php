<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Actions\StoreLeadAction;
use App\Http\Requests\StoreLeadRequest;
use App\Transfers\LeadTransfer;

class LeadsController extends Controller
{
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        return view('leads.create');
    }

    public function store(StoreLeadRequest $request, StoreLeadAction $action): \Illuminate\Http\RedirectResponse
    {
        $dto = new LeadTransfer($request->validated());
        $result = $action->handle($dto);
        return redirect()->back()->with('message', 'Lead created with id: ' . $result->id);
    }
}
