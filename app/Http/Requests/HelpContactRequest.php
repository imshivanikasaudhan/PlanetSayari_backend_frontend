<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelpContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required',
            'Contact_Message'=> 'required|min:305'
        ];
    }
}
