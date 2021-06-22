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
			'email'=> 'required|email|max:49',
			'password'=>'required|min:8|max:20|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
        ];
    }
		public function messages(){
		return[
		'email.required'=> 'cannot leave empty',
		'email.max:49'=> 'cannot have more than 49 characters',
		'passwrod.required'=> 'cannot leave empty',
		'passwrod.min:8'=> 'minimum 8',
		'passwrod.max:20'=> 'max 20',
		'password.regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'=>'Should have at least 1 lowercase AND 1 uppercase AND 1 number'
		];
	}
}
