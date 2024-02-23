<?php

namespace App\Http\Requests\IklanProperti;

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
            'judul_properti' => 'required|string|min:5|max:250',
            'nomor_telepon_properti' => 'required|string|min:8|max:20',
            'lokasi_properti' => 'required|string',
            'provinsi_properti' => 'required|string',
            'luas_bangunan_properti' => 'required|string',
            'luas_tanah_properti' => 'required|string',
            'kamar_tidur_properti' => 'required|string',
            'kamar_mandi_properti' => 'required|string',
            'harga_start_properti' => 'required|string',
            'harga_end_properti' => 'required|string',
            'deskripsi_properti' => 'required|string|min:3|max:6000',
            'featured_image' => 'required|image|max:1024|mimes:jpg,jpeg,png',
            'detail_foto_properti' => 'required|array',
            'foto_perusahaan_properti' => 'required|image|max:1024|mimes:jpg,jpeg,png',
        ];
    }
}
