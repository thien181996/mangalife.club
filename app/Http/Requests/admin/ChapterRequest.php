<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ChapterRequest extends FormRequest
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
            'chapter_name' => 'required',
            'chapter_slug' => 'required',
            'chapter_status' => 'required',
            'chapter_description' => 'max:500'
        ];
    }

    public function messages()
    {
        return [
            'chapter_name.required' => "Nội dung này không được để trống",
            'chapter_slug.required' => "Nội dung này không được để trống",
            'chapter_status.required' => "Nội dung này không được để trống",
            'chapter_description.max' => "Vượt quá kí tự cho phép"
        ];
    }
}
