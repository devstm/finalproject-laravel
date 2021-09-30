<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CraftsRequest extends FormRequest
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
            'name' => 'required|min:4|max:50',
            'describe' => 'required|min:4|max:255',
            'category_id' => 'required',
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
            'name.required' => 'هذا الحقل مطلوب',
            'name.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'name.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'describe.required' => 'هذا الحقل مطلوب',
            'describe.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'describe.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'category_id.required' => 'هذا الحقل مطلوب',
        ];
    }
}
