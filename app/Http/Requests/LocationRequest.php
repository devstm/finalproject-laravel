<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
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
            'city_id' => 'required|numeric',
            'neighborhood_id' => 'required|numeric',
            'street' => 'required|min:4|max:255',
            'craftsmanId' => 'required|numeric',
        ];
    }
    /**
     * Get the messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'city_id.required' => 'هذا الحقل مطلوب',
            'city_id.numeric' => 'هذا الحقل يجب ان يحتوي على ارقام فقط',
            'neighborhood_id.required' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'neighborhood_id.numeric' => 'هذا الحقل يجب ان يحتوي على ارقام فقط',
            'street.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'street.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'street.required' => 'هذا الحقل مطلوب',
            'craftsmanId.required' => 'هذا الحقل مطلوب',
            'craftsmanId.numeric' => 'هذا الحقل يجب ان يحتوي على ارقام فقط',
        ];
    }
}
