<?php
/**
 * @author  Phat Le
 */
namespace App\Http\Requests;

use App\Http\Requests\Request as BaseRequest;

class ProductRequest extends Request {

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
            'name' => 'required',
            'description' => 'required',
            'image_1' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ];
    }

}