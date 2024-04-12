<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageGroupRequest extends FormRequest
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
            'slug' => 'nullable|min:3|max:255|unique:page_groups,slug,' . $this->id,
            'short_description' => ['required'],
            'image_name' => ['nullable'],
            'visible_status' => ['nullable'],
            'page_type' => ['required'],
        ];
    }
}
