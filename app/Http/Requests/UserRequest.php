<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|email',
            'password'=>'required|min:6',
            'name'=>'required',
            'phone'=>'required|min:10'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Bạn chưa nhập email',
            'email.email'=>'Email sai định dạng',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự',
            'name.required'=>'Bạn chưa nhập tên',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            'phone.min'=>'Số điện thoại ít nhất 10 ký tự'
        ];
    }
}
