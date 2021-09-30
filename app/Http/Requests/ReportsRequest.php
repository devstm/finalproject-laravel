<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportsRequest extends FormRequest
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
            'subject' => 'required|min:4|max:50',
            'email' => 'required|email|min:4|max:50',
            'content' => 'required|min:4|max:255',
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
            'subject.required' => 'هذا الحقل مطلوب',
            'subject.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'subject.max' => 'هذا الحقل يجب ان يكون 50 حرف فأقل',
            'email.required' => 'هذا الحقل مطلوب',
            'email.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'email.max' => 'هذا الحقل يجب ان يكون 50 حرف فأقل',
            'content.required' => 'هذا الحقل مطلوب',
            'content.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'content.max' => 'هذا الحقل يجب ان يكون 50 حرف فأقل',
        ];
    }
}
