<?php

namespace App\Http\Requests;

use App\User;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|unique:users',
            'password' => 'required|min:5|confirmed',
            'code' => [
                'required',
                function ($attribute, $value, $fail) {
                    if ($value != session('validate_code.code')) {
                        return $fail('验证码输入错误');
                    }
                },
            ],
            'account' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        if (User::where('email', $value)->first()) {
                            return $fail('邮箱已经存在');
                        }
                        return true;
                    }
                    if (preg_match('/^\d{11}$/', $value)) {
                        if (User::where('mobile', $value)->first()) {
                            return $fail('手机号已经存在');
                        }
                        return true;
                    }
                    return $fail('帐号必须为邮箱或手机号');
                },
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '昵称 不能为空',
            'code.required' => '验证码 不能为空',
            'password.required' => '密码 不能为空',
            'password.confirmed'=>'两次密码输入不一致',
            'account.required' => '帐号 不能为空',
        ];
    }
}
