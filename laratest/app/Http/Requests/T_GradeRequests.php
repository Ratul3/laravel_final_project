<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class T_GradeRequests extends FormRequest
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
            'name'  => 'required|min:3',
          
			'date'      => 'required'
        
        ];
    }

    public function messages(){

        return [
            'name.required'  => "Name can't be empty",
            'name.min'  => "Name can't be less than three characters",
		
			'date.required'  => "Date can't be empty",
			
        ];
    }
	
}
