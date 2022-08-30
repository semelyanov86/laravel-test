<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'amount' => ['required', 'integer'],
            'currency' => ['required', 'string'],
            'token' => ['required', 'string']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
