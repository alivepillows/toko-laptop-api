<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLaptopRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'brand' => ['sometimes', 'required', 'string', 'max:100'],
            'processor' => ['sometimes', 'required', 'string', 'max:100'],
            'ram_gb' => ['sometimes', 'required', 'integer', 'min:1'],
            'storage_gb' => ['sometimes', 'required', 'integer', 'min:1'],
            'price' => ['sometimes', 'required', 'numeric', 'min:0'],
            'stock' => ['sometimes', 'required', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
        ];
    }
}
