<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class ProductRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'mimes:jpeg,jpg,png',

        ];
    }
    public function messages(){
        return [
            'name.required' => 'กรุณาระบุชื่อสินค้า',
            'price.required' => 'กรุณากำหนดราคาสินค้า',
            'stock.required' => 'กรุณาระบุจำนวนสินค้าที่มีในสต๊อก',
            'image.mimes' => 'รองรับไฟล์รูปนามสกุล jpeg,jpg,png',
        ];
    }
}
