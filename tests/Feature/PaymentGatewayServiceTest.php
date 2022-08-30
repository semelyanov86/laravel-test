<?php

namespace Tests\Feature;

use App\Models\User;
use App\Services\PaymentGatewayService;
use Tests\TestCase;

class PaymentGatewayServiceTest extends TestCase
{
    public const TEST_TOKEN = 'test_token';

    public function testPaymentCreatedSuccessfully(): void
    {
        $this->withoutExceptionHandling();
        $paymentService = $this->mock(PaymentGatewayService::class);
        $paymentService->shouldReceive('doPayment')->with(self::TEST_TOKEN, \Mockery::type(User::class))->andReturn('payment-id');
        $response = $this->post(route('payment.store'), [
            'amount' => 2000,
            'currency' => 'EUR',
            'token' => self::TEST_TOKEN
        ]);
        $response->assertRedirect('/leads');
    }
}
