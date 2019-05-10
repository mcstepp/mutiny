<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForumThread extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $user = $this->user();

        return $user->can('view', $this->forum);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:6|max:255',
            'body' => 'required|min:6',
            'description' => 'nullable|min:6',
            'author_id' => 'required',
            'author_type' => 'required',
            'ic_month' => 'required_with_all:ic_day,ic_year',
            'ic_day' => 'required_with_all:ic_month,ic_year',
            'ic_year' => 'required_with_all:ic_day,ic_month',
        ];
    }
}
