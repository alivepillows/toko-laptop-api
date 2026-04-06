<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLaptopRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:laptops,name'],
            'brand' => ['required', 'string', 'max:100'],
            'processor' => ['required', 'string', 'max:100'],
            'ram_gb' => ['required', 'integer', 'min:1'],
            'storage_gb' => ['required', 'integer', 'min:1'],
            'price' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'description' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.unique' => 'Nama laptop sudah terdaftar.',
            'name.required' => 'Nama laptop wajib diisi.',
            'brand.required' => 'Brand wajib diisi.',
            'processor.required' => 'Processor wajib diisi.',
            'ram_gb.required' => 'RAM wajib diisi.',
            'storage_gb.required' => 'Storage wajib diisi.',
            'price.required' => 'Harga wajib diisi.',
            'stock.required' => 'Stock wajib diisi.',
        ];
    }
}
