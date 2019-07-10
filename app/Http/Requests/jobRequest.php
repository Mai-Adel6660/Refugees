<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class jobRequest extends FormRequest
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
            'name_job'     => 'required',
            'seniority'    => 'required',
            'details'      => 'required',
            'type'         => 'required|in:full_time,part_time',
            'sallery'      => 'required|numeric',
            
            ];
    }

    public function message()
    {
        return [
        'name_job.required'     => 'Please Enter The Name Of Job',
        'seniority.required'    => 'Please Enter The Seniority',
        'details.required'      => 'Please Enter The Details',
        'type.required'         => 'Please Select The Type',
        'sallery.required'      => 'Please Enter sallery',
       
        ];
    }
}
