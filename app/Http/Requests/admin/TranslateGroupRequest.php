<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TranslateGroupRequest extends FormRequest
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
            'group_description' => 'max:500',
            'group_name' => 'required',
            'user_id' => 'required',
            'group_slug' => 'required',
            'group_cover' => [
                Rule::dimensions()->maxWidth(360)->maxHeight(360)->minWidth(360)->minHeight(360),
                'mimes:jpeg,jpg,png'
            ]
        ];
    }

    public function messages()
    {
        return [
            'group_description.max' => "Độ dài đã quá số lượng quy định",
            'group_name.required' => "Nội dung này không được để trống",
            'user_id.required' => "Nội dung này không được để trống",
            'group_slug.required' => "Nội dung này không được để trống",
            'group_cover.dimensions' => "Kính thước ảnh cho phép là 360x360",
            'group_cover.mimes' => "Chỉ cho phép định dạng jpeg,jpg,png",
        ];
    }
}
