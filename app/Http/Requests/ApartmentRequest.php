<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentRequest extends FormRequest
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
            'location'     => 'required',
            'area'         => 'required|numeric',
            'furnished'    => 'required|in:yes,no',
            'floor'        => 'required',
            'rooms'        => 'required|numeric',
            'bathrooms'    => 'required|numeric',
            'price'        => 'required|numeric',
            'img'          => 'required|'.v_image(),
            'communication'=> 'required'

        ];
    }
    public function message()
    {
        return [
        'location.required'     => 'Please Enter The location',
        'area.required'         => 'Please Enter The area',
        'furnished.required'    => 'Please Select furnished',
        'floor.required'        => 'Please Enter Number Of Floor',
        'rooms.required'        => 'Please Enter Number Of Rooms',
        'bathrooms.required'    => 'Please Enter Number Of Bathrooms',
        'price.required'        => 'Please Enter The Price',
        'img.required'          => 'Please Enter An Image',
        'communication.required'=> 'Please Enter communication'

        ];
    }
}
