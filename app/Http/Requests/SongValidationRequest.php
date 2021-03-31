<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongValidationRequest extends FormRequest
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

        $rules = [
            'author' => 'nullable',
            'lyrics' => 'required'
        ];

        if ($this->getMethod() == 'PUT') $rules += ['title' => 'required|unique:songs,title,'.$this->song->id];
        if ($this->getMethod() == 'POST') $rules += ['title' => 'required|unique:songs,title'];

        return $rules;
    }
}
