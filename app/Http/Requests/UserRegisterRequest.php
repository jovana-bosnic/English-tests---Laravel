<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'firstname' => 'required|string|max:30',
            'lastname' => 'required|string|max:30',
            'email' => 'required|string|unique:users,email|max:100',
            'password' => 'required|same:confirm',
            'confirm' => 'required',
        ];
    }
}
