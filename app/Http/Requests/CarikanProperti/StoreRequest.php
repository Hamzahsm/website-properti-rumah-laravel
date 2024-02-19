<?php

namespace App\Http\Requests\CarikanProperti;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'nama' => 'required|string|min:5|max:250',
            'telepon' => 'required|string|min:8|max:20',
            'lokasi_properti' => 'required|string|min:3|max:20',
            'harga_minimal' => 'required|string|min:3|max:20',
            'harga_maksimal' => 'required|string|min:3|max:20',
            'tipe_properti' => 'required|string',
        ];
    }
}
