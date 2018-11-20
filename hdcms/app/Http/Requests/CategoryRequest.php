<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'title' => "required|max:20",
            'icon' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '栏目名称不能为空',
            'title.max' => '栏目名称最多20个字',
            'icon.required' => '栏目图标不能为空',
        ];
    }

}
