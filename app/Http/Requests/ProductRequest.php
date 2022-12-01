<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'          => 'required|regex:/^[a-zA-Z0-9 .-]*$/u',
            'description'   => 'required',
            'category_id'   => 'required|exists:categories,id',
            'image'         => 'required|file|image',
            'image2'         => 'required|file|image',
            'price'         => 'required|integer',
            'weight'        => 'required|integer',
            'quantity'      => 'required|integer'
        ];
    }
}
