<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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
            'faceclaim' => [
                'string',
                Rule::unique('characters', 'user_id')->ignore($this->user()->id)
            ],
            'history' => 'required|min:100',
            'personality' => 'required|min:100',
            'appearance' => 'required|min:100'
        ];
    }
}
