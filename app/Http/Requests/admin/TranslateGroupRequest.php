<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

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
            'group_slug' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'group_description.max' => "Độ dài đã quá số lượng quy định",
            'group_name.required' => "Nội dung này không được để trống",
            'group_slug.required' => "Nội dung này không được để trống"
        ];
    }
}
