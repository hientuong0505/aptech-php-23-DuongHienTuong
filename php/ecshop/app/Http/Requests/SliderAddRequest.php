<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderAddRequest extends FormRequest
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
            'name' => 'required|unique:sliders|max:100',
            'description' => 'required|min:10',
            'image_path' => 'required',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Nhập tên không được để trống',
        'name.unique' => 'Tên không được phép trùng',
        'name.max' => 'Nhập tên tối đa 100 kí tự',
        'description.required'  => 'Nhập mô tả',
        'description.min'  => 'Nhập mô tả ít nhất 10 kí tự',
        'image_path.required'  => 'Chọn hình ảnh bắt buộc',
    ];
}
}
