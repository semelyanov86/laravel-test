<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Services\PaymentGatewayService;
use App\Services\PaymentGatewayServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentsController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
    }

    public function store(Request $request, PaymentGatewayServiceInterface $paymentGatewayService)
    {
        $payment_id = $paymentGatewayService->doPayment($request->input('token'), Auth::user());
        return redirect(route('payments.create'))->with(['message' => 'Payment created with id: ' . $payment_id]);
    }

    public function show(Payment $payment)
    {
    }

    public function edit(Payment $payment)
    {
    }

    public function update(Request $request, Payment $payment)
    {
    }

    public function destroy(Payment $payment)
    {
    }
}
