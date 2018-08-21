<?php

namespace Modules\Article\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SlideRequest extends FormRequest
{
    //验证规则
    public function rules()
    {
        return [
            'title' => 'required',
            'url' => 'required',
            'pic' => 'required',
            'click' => 'required',
            'enable' => 'required',
        ];
    }

    //错误信息处理
    public function messages()
    {
        return [
            'title.required' => '标题 不能为空',
            'url.required' => '链接 不能为空',
            'pic.required' => '图片 不能为空',
            'click.required' => '点击数 不能为空',
            'enable.required' => '状态 不能为空',
        ];
    }

    //权限验证
    public function authorize()
    {
        return true;
    }
}
