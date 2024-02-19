<?php

namespace App\Http\Requests\IklanPremium;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
             'judul_properti' => 'nullable|string|min:3|max:250',
             'nomor_telepon_properti' => 'nullable|string|min:8|max:20',
             'lokasi_properti' => 'nullable|string',
             'provinsi_properti' => 'nullable|string',
             'luas_bangunan_properti' => 'nullable|string',
             'luas_tanah_properti' => 'nullable|string',
             'kamar_tidur_properti' => 'nullable|string',
             'kamar_mandi_properti' => 'nullable|string',
             'harga_start_properti' => 'nullable|string',
             'harga_end_properti' => 'nullable|string',
             'deskripsi_properti' => 'nullable|string|min:3|max:6000',
             'featured_image' => 'nullable|image|max:1024|mimes:jpg,jpeg,png',
             'foto_perusahaan_properti' => 'nullable|image|max:1024|mimes:jpg,jpeg,png',
        ];
    }
}
