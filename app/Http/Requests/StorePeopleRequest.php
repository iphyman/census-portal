<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeopleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'min:3', 'max:255'],
            'last_name' => ['required', 'string', 'min:3', 'max:255'],
            'dob' => ['required'],
            'state_id' => ['required', 'numeric'],
            'local_government_id' => ['required'],
            'residential_area' => ['required', 'string'],
            'sex' => ['required'],
            'marital_status' => ['required'],
            'occupation' => ['required', 'string']
        ];
    }
}