<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $user_id = $this->request->all()['user_id'];
        return [
//            'username' => [
//                'required',
//                Rule::unique('users')->ignore($user_id),
//                'regex:/^[a-zA-Z0-9.]+$/'
//            ],
//            'email' => [
//                'required',
//                Rule::unique('users')->ignore($user_id),
//                'regex:/^[a-zA-Z0-9.@]+$/'
//            ]
            'password' => 'max:50'
        ];
    }

    public function messages()
    {
        return [
//            'username.required' => "Nội dung này không được bỏ trống",
//            'username.unique' => "Tên tài khoản này đã tồn tại",
//            'username.regex' => "Vui lòng chỉ sử dụng chữ cái (a-z), số và dấu chấm",
//            'email.required' => "Nội dung này không được bỏ trống",
//            'email.unique' => "Địa chỉ Email này đã tồn tại",
//            'email.regex' => "Vui lòng chỉ sử dụng chữ cái (a-z), số và dấu chấm"
            'password.max' => "Tối đa 50 kí tự",
        ];
    }
}
