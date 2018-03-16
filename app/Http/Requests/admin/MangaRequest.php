<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class MangaRequest extends FormRequest
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
            'manga_name' => 'required',
            'manga_slug' => 'required',
            'manga_status' => 'required',
            'manga_description' => 'max:500'
        ];
    }
    public function messages()
    {
        return [
            'manga_name.required' => 'Nội dung không được bỏ trống',
            'manga_slug.required' => 'Nội dung không được bỏ trống',
            'manga_status.required' => 'Nội dung không được bỏ trống',
            'manga_description.max' => 'Vượt quá kí tự cho phép'
        ];
    }
}
