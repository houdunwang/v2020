<?php

namespace Modules\Base\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaseRequest extends FormRequest
{
    //验证规则
    public function rules()
    {
        return array (
);
    }

    //错误信息处理
    public function messages()
    {
        return array (
);
    }

    //权限验证
    public function authorize()
    {
        return true;
    }
}
