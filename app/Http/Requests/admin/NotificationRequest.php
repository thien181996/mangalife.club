<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class NotificationRequest extends FormRequest
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
            'user_id' => 'required',
            'mailbox_content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => "Nội dung này không được để trống",
            'mailbox_content.required' => "Nội dung này không được để trống"
        ];
    }
}
