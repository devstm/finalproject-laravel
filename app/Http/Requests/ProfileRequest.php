<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'first_name' => 'required|min:4|max:255',
            'last_name' => 'required|min:4|max:255',
            'martial_status' => 'required|min:4|max:255',
            'image_path' => 'required|min:2',
            'description' => 'required|min:4|max:255',
            'phone' => 'required|min:4|max:255',
            'contact' => 'required|min:4|max:255',
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
            'first_name.required' => 'هذا الحقل مطلوب',
            'first_name.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'first_name.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'last_name.required' => 'هذا الحقل مطلوب',
            'last_name.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'last_name.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'martial_status.required' => 'هذا الحقل مطلوب',
            'martial_status.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'martial_status.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'image_path.required' => 'هذا الحقل مطلوب',
            'image_path.min' => 'هذا الحقل يجب ان يكون 2 احرف على الاقل',
            'description.required' => 'هذا الحقل مطلوب',
            'description.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'description.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'phone.required' => 'هذا الحقل مطلوب',
            'phone.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'phone.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'contact.required' => 'هذا الحقل مطلوب',
            'contact.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'contact.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
        ];
    }
}
