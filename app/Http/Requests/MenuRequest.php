<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'name' => 'required|min:2|max:255',
            'link' => 'required|min:2|max:255',
            'keyword' => 'min:2|max:255',
            'description' => 'min:2|max:1024',
            'active' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
//            'name.required' => $group_name . Lang::get('validation.required'),
//            'name.min' => $group_name . Lang::get('validation.min.string'),
//            'name.max' => $group_name . Lang::get('validation.max.string'),
//            'description.required' => $group_text . Lang::get('validation.required'),
//            'description.min' => $group_text . Lang::get('validation.min.string'),
//            'description.max' => $group_text . Lang::get('validation.max.string'),
//            'permissions.required' => Lang::get('messages.permissions') . Lang::get('validation.required'),
        ];
    }

}
