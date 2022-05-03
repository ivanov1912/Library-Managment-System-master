<?php

namespace App\Http\Requests;

use App\Models\User;
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
            'name' => 'required',
            'email' => 'required|email',
            'role_id' => 'required',
            'gender_id' => 'required',
            'dob' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => 'required',
        ];
    }

    public function message(){
        return [
            'name.required' => 'required',
            'email.required.email' => 'required',
            'role_id.required' => 'required',
            'gender_id.required' => 'required',
            'dob' => 'date|required',
            'image.required' => 'required|file|image',
            'password.required' => 'required',
        ];
    }

}
