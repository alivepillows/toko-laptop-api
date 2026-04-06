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
            'name' => ['sometimes', 'required', 'string', 'max:255', 'unique:laptops,name,' . optional($this->route('laptop'))->id],
            'brand' => ['sometimes', 'required', 'string', 'max:100'],
            'processor' => ['sometimes', 'required', 'string', 'max:100'],
            'ram_gb' => ['sometimes', 'required', 'integer', 'min:1'],
            'storage_gb' => ['sometimes', 'required', 'integer', 'min:1'],
            'price' => ['sometimes', 'required', 'numeric', 'min:0'],
            'stock' => ['sometimes', 'required', 'integer', 'min:0'],
            'description' => ['sometimes', 'nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.unique' => 'Nama laptop sudah terdaftar.',
            'name.required' => 'Nama laptop wajib diisi ketika diubah.',
            'brand.required' => 'Brand wajib diisi ketika diubah.',
            'processor.required' => 'Processor wajib diisi ketika diubah.',
            'ram_gb.required' => 'RAM wajib diisi ketika diubah.',
            'storage_gb.required' => 'Storage wajib diisi ketika diubah.',
            'price.required' => 'Harga wajib diisi ketika diubah.',
            'stock.required' => 'Stock wajib diisi ketika diubah.',
        ];
    }
}
