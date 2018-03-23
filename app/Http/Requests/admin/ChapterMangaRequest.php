<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ChapterMangaRequest extends FormRequest
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
            'chapter_img' => [
                'mimes:jpeg,jpg,png'
            ]
        ];
    }

    public function messages()
    {
        return [
            'chapter_img.mimes' => "Chỉ cho phép định dạng jpeg,jpg,png",
        ];
    }
}
