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
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'sometimes|required',
            'password' => 'sometimes|required|min:5|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '昵称不能为空',
            'password.required' => '密码不能为空',
            'password.confirmed' => '两次密码输入不一致',
        ];
    }

}
