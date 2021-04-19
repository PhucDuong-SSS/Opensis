<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|gt:4',
            'email' => 'unique:users'
        ];
    }

    function messages()
    {
        return [
            'name.required' => 'Trường này không được để trống',
            'username.required' => 'Trường này không được để trống',
            'password.required' => 'Trường này không được để trống',
            'username.unique' => 'Tên đăng nhập đã được sử dụng',
            'email.unique' => 'Email đã được sử dụng',
            'password.gt' => 'Mật khẩu ít nhất 4 ký tự',
        ];
    }
}
