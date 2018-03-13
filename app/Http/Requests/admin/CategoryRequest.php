<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'category_name' => 'required|max:191',
            'category_slug' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'category_name.required' => "Nội dung này không được bỏ trống",
            'category_slug.required' => "Nội dung này không được bỏ trống",
            'category_name.max' => "Vượt quá kí tự cho phép"
        ];
    }
}
