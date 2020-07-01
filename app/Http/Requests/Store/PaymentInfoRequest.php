<?php

namespace App\Http\Requests\Store;

use Illuminate\Foundation\Http\FormRequest;

class PaymentInfoRequest extends FormRequest
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
            'order_ref' => 'required|uuid' ,
            'bank_name' => 'required',
            'transaction_ref' => 'required',
            'date' => 'required|date',
            'amount' => 'required|numeric',
            'currency' => 'required|max:3|min:3'
        ];
    }
}
