<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'author_description' => 'max:500',
            'author_name' => 'required',
            'author_slug' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'author_description.max' => "Độ dài đã quá số lượng quy định",
            'author_name.required' => "Nội dung này không được để trống",
            'author_slug.required' => "Nội dung này không được để trống"
        ];
    }
}
