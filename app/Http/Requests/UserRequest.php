<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'      => 'required',
            'email'     => 'required',
            'level'     => 'required|in:user,refugee,organization',
            'password'  => 'required'
        ];
    }

    public function message()
    {
        return [
        'name.required'     => 'Please Enter Your Name',
        'email.required'    => 'Please Enter Your Email',
        'level.required'    => 'Please Select Your Level',
        'password.required' => 'Please Enter Your Password',

        ];
    }
}
