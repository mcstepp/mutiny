<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminUpdateCharacter extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'owner' => 'required|numeric|exists:users,id',
            'faceclaim' => 'string',
            'job_id' => 'required|numeric|exists:industry_jobs,id',
            'history' => 'required|min:100',
            'personality' => 'required|min:100',
            'appearance' => 'required|min:100'
        ];
    }
}
