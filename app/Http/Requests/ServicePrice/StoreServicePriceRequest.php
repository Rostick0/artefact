<?php

namespace App\Http\Requests\ServicePrice;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicePriceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->role === 'admin';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'description' => 'required|string',
            'price' => 'required',
            'is_from' => '',
        ];
    }
}
