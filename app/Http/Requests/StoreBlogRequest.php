<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title' => ['required'],
            'slug' => 'required|min:3|max:255|unique:blogs',
            'short_description' => ['required'],
            'full_description' => ['required'],
            'image_name' => ['required'],
            'visible_status' => ['nullable'],
        ];
    }
}
