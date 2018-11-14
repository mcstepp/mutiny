<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewCharacter extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO: Check if they are allowed to make a new character
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
            'user_id' => 'required|exists:users,id',
            'first_name' => 'required|max:32',
            'chosen_name' => 'max:32',
            'last_name' => 'required|max:32',
            'faction' => 'required|exists:factions,id',
            'origin_faction' => 'required|exists:factions,id',
            'occupation' => 'required|max:64',
            'ic_birth_month' => 'required|between:1,12',
            'ic_birth_day' => 'required|between:1,31',
            'ic_birth_year' => 'required|max:132',
            'initiation_year' => 'required|max:150',
            'age' => 'required|digits:2',
            'history' => 'required|min:100',
            'personality' => 'required|min:100',
            'appearance' => 'required:min:100',
            'faceclaim' => 'unique:characters,faceclaim'
        ];
    }
}
