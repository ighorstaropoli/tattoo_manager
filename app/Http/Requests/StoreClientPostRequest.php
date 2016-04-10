<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreClientPostRequest extends Request
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
            'email' => 'required|email',
            'name' => 'required|min:3',
            #'dob' => 'required|date_format:d/m/Y',
            'gender' => 'required',
            'rg' => 'required',
            'phone' => 'required',
            /* Address*/
            "address.cep" => 'required',
            'address.street' => 'required',
            'address.number' => 'required',
            /*'address.complement' => 'required',*/
            'address.neighborhood' => 'required',
            'address.city' => 'required',
            'address.state' => 'required'
        ];
    }
}
