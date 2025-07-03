<?php

namespace App\Http\Requests;

use App\CurrencyEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PricesRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
					'currency' => [Rule::enum(CurrencyEnum::class)],
        ];
    }
}
