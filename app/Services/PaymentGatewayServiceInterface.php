<?php

namespace App\Services;

interface PaymentGatewayServiceInterface
{
    public function doPayment(string $token, \App\Models\User $user): int;
}
