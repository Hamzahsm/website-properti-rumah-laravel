<?php

namespace App\Http\Requests\Posts;

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
            'title' => 'required|string|min:5|max:250',
            'tags' => 'required|string|min:2|max:250',
            'deskripsi' => 'required|string|min:5|max:2000',
            'featured_image' => 'required|image|max:1024|mimes:jpg,jpeg,png',
        ];
    }
}
