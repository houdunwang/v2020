<?php

namespace Modules\Article\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
{
    //验证规则
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'author' => 'required',
            'content' => 'required',
            'click' => 'required'
        ];
    }

    //错误信息处理
    public function messages()
    {
        return [
            'title.required' => '标题不能为空',
            'title.min' => '标题不能少于5个字符',
            'author.required' => '作者不能为空',
            'content.required' => '内容不能为空',
            'click.required' => '点击数不能为空',
        ];
    }

    //权限验证
    public function authorize()
    {
        return true;
    }
}
