<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'sitename_en'=>'required',
            'sitename_ar'=>'required',
            'email'      =>'required',
            'logo'       =>'required|'.v_image(),
            'icon'       =>'required|'.v_image(),
            'description'=>'nullable',
            'keywords'   =>'nullable'

        ];
    }

    public function message()
    {
        return [
            'sitename_en.required'=>'You Should Enter The Site Name In English',
            'sitename_ar.required'=>'You Should Enter The Site Name In Arabic',
            'email.required'      =>'Please Enter Site Email',
            'logo.required'       =>'Logo Is Required',
            'icon.required'       =>'Icon Is Required'

        ];
    }
}
