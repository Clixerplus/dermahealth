<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

class ShippingInfoRequest extends FormRequest
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
            'name'      => 'required|min:2',
            'lastname'  => 'required|min:2',
            'email'     => 'required|email',
            'phone'     => 'required|numeric',
            'address'   => 'required|min:5',
            'state'     => 'required|min:4',
            'city'      => 'required|min:4',
        ];
    }
}
