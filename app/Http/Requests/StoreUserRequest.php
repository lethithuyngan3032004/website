<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'name' => 'required',
            'username' => 'required|unique:user,username',
            'email' => 'required|email|unique:user,email',
            'phone' => 'required|digits_between:10,11|unique:user,phone',
            'password' => 'required|min:8',
            'password_re' => 'required|same:password',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Họ tên không được để trống!',
            'username.required' => 'Tên đăng nhập không được để trống!',
            'username.unique' => 'Tên đăng nhập đã tồn tại!',
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email không đúng định dạng!',
            'email.unique' => 'Email đã tồn tại!',
            'phone.required' => 'Số điện thoại không được để trống!',
            'phone.digits_between' => 'Số điện thoại phải có từ 10 đến 11 chữ số!',
            'phone.unique' => 'Số điện thoại đã tồn tại!',
            'password.required' => 'Mật khẩu không được để trống!',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự!',
            'password_re.required' => 'Xác nhận mật khẩu không được để trống!',
            'password_re.same' => 'Xác nhận mật khẩu không khớp!',
        ];
    }
}
