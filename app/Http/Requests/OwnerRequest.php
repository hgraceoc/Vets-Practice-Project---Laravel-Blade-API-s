<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerRequest extends FormRequest
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
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'address_1' => ['required', 'string'],
            'address_2' => ['required', 'string'], 
            'town' => ['required', 'string'],
            'postcode' => ['required', 'string'],
            'telephone' => ['required', 'string'],                      
        ];
    }
    public function messages()
{
    return [
        'first_name.required' => 'A title is required',
        'last_name.required'  => 'A message is required',
    ];
}
}
