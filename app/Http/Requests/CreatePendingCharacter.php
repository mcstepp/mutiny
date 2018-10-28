<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePendingCharacter extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:32',
            'chosen_name' => 'max:32',
            'last_name' => 'required|max:32',
            'faction' => 'required|exists:faction,id',
            'origin_faction' => 'required|exists:faction,id',
            'occupation' => 'required|max:64',
            'ic_birth_month' => 'required|between:1,12',
            'ic_birth_day' => 'required|between:1,31',
            'ic_birth_year' => 'required|lte:132',
            'initiation_year' => 'required|lte:150',
            'age' => 'required|digits:2',
            'history' => 'required|min:100',
            'personality' => 'required|min:100',
            'appearance' => 'required:min:100',
            'faceclaim' => 'unique:characters,faceclaim'
        ];
    }
}
