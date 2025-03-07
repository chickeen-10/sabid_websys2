<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name'  => 'required|string|max:50',
            'last_name'   => 'required|string|max:50',
            'sex'         => 'required|in:Male,Female',
            'mobile_phone'=> ['required', 'regex:/^(09\d{2})-\d{3}-\d{3}$/'],
            'tel_no'      => 'nullable|numeric',
            'birth_date'  => 'required|date_format:Y-m-d',
            'address'     => 'required|string|max:100',
            'email'       => 'required|email',
            'website'     => 'nullable|url',
        ];
    }
    public function messages()
    {
        return [
            'mobile_phone.regex' => 'Mobile number must follow the format 0998-XXX-XXX.',
            'birth_date.date_format' => 'Birthdate must be in YYYY-MM-DD format.',
        ];
    }
}
