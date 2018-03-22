<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'author_slug' => 'required',
            'author_cover' => [
                Rule::dimensions()->maxWidth(360)->maxHeight(360)->minWidth(360)->minHeight(360),
                'mimes:jpeg,jpg,png'
            ]
        ];
    }

    public function messages()
    {
        return [
            'author_description.max' => "Độ dài đã quá số lượng quy định",
            'author_name.required' => "Nội dung này không được để trống",
            'author_slug.required' => "Nội dung này không được để trống",
            'author_cover.dimensions' => "Kính thước ảnh cho phép là 360x360",
            'author_cover.mimes' => "Chỉ cho phép định dạng jpeg,jpg,png",
        ];
    }
}
