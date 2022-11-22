<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
        return [
            'name' => 'required|max:25',
            'email' => 'required|email|unique:users|max:25',
            'password' => 'required|min:5|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name bos ola bilmez',
            'name.max' => 'Name max 25 simvol ola biler',
            'email.required' => 'email bos ola bilmez',
            'email.unique' => 'email movcuddur',
            'email.email' => 'email duzgun deyil',
            'email.max' => 'email max 25 simvol ola biler',
            'password.required' => 'Parol bos ola bilmez',
            'password.confirmed' => 'Parol ve tekrar parol uygun deyil',
            'password.min' => 'Parol min 5 simvol olmalidir',

        ];
    }
}
