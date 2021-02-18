<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSetting extends FormRequest
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
            'address' => 'required',
            'address_en' => 'required',
            'photo' => 'required',
            'twitter' => 'required',
            'google' => 'required',
            'linked' => 'required',
            'facebook' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'skype'=>'required',

        ];
    }
    public function messages()
    {
        return [
            'address.required' => trans('validation.required'),
            'address_en' => trans('validation.required'),
            'photo.required' => trans('validation.required'),
            'twitter.required' => trans('validation.required'),
            'google.required' => trans('validation.required'),
            'linked.required' => trans('validation.required'),
            'facebook.required' => trans('validation.required'),
            'phone.required' => trans('validation.required'),
            'email.required' => trans('validation.required'),
            'skype.required' => trans('validation.required'),
        ];
    }
}
