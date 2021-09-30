<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:4|max:255',
            'body' => 'required|min:4|max:255',
            'cover_image' => 'image',
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
            'title.required' => 'هذا الحقل مطلوب',
            'title.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'title.max' => 'هذا الحقل يجب ان يكون 50 حرف فأقل',
            'body.required' => 'هذا الحقل مطلوب',
            'body.min' => 'هذا الحقل يجب ان يكون 4 احرف على الاقل',
            'body.max' => 'هذا الحقل يجب ان يكون 50 حرف فأقل',
            'craftsman_id.required' => 'هذا الحقل مطلوب',
            'craftsman_id.numeric' => 'هذا الحقل يجب ان يكون رقم',
            'craftsman_id.min' => 'هذا الحقل يجب ان يكون 1 احرف على الاقل',
            'craftsman_id.max' => 'هذا الحقل يجب ان يكون 255 حرف فأقل',
            'cover_image.image' => 'هذا الحقل يجب ان يكون صورة فقط',
        ];
    }
}