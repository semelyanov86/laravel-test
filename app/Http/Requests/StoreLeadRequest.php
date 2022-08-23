<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class StoreLeadRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'min:3', 'max:190'],
            'last_name' => ['required', 'min:3', 'max:190'],
            'email' => ['required', 'email'],
            'phone' => ['nullable', 'alpha_num'],
            'description' => ['nullable', 'string']
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
