<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepartment extends FormRequest
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
            'Name' => 'required|unique:departments,Name',
        ];
    }
    public function messages()
    {
        return [
            'Name.required' => trans('validation.required'),
            'Name.unique' => 'Department Name is token',

        ];
    }
}

