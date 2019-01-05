<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UpdateUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO: Check if they are allowed to make request
        //return false;
        return 'true';
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => [
                'required',
                'string',
                'min:2',
                'max:255',
                Rule::unique('users')->ignore($this->user()->id)
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($this->user()->id)
                ],
            'alias' => 'required',
            'new_password' => 'nullable|string|min:6|confirmed',
            'password' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (password_verify($value,$this->user()->getAuthPassword())) {
                        return true;
                    }
                    return $fail('The '.$attribute.' is invalid.');
                },
                ]
        ];
    }
}
