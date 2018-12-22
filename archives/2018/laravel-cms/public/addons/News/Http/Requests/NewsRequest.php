<?php

namespace Modules\News\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
