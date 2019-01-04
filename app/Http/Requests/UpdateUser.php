<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacter extends FormRequest
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
            'username' => 'required|string|max:255|unique:users',
            'alias' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'new_password' => 'required|exists:factions,id',
            'password' => 'required|exists:factions,id'
        ];
    }
}
