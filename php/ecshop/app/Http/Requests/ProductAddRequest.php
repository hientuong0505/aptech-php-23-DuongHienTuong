<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductAddRequest extends FormRequest
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
            'name' => 'bail|required|unique:products|max:35|min:8',
            'price' => 'required',
            'category_id' => 'required',
            'content' => 'required',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Tên không được để trống',
        'name.unique' => 'Tên không được phép trùng',
        'name.max' => 'Tên không được phép quá 35 kí tự',
        'name.min' => 'Tên không được ít hơn 8 kí tự',
        'price.required' => 'Giá tiền không được để trống',
        'category_id.required' => 'Danh mục không được để trống',
        'content.required' => 'Nội dung mô tả không được để trống',
    ];
}
}
