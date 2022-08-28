<?php
namespace App\Services;

use App\Models\Payment;

class PaymentGatewayService implements PaymentGatewayServiceInterface
{
    public function doPayment(string $token, \App\Models\User $user): int
    {
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $payment = Payment::create([
            'amount' => $user->balance,
            'currency' => 'EUR',
            'source' => $token,
            'name' => 'Balance from ' . $user->name,
            'email' => $user->email
        ]);
        return $payment->id;
    }
}
