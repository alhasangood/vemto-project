<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'name' => ['required', 'max:255', 'string'],
            'descripton' => ['required', 'max:255', 'string'],
            'product_code' => ['required', 'max:255', 'string'],
            'qty' => ['required', 'numeric'],
            'product_price' => ['required', 'numeric'],
            'product_image' => ['required', 'max:255', 'string'],
            'product_year' => ['required', 'date'],
            'status' => ['required', 'numeric'],
        ];
    }
}
