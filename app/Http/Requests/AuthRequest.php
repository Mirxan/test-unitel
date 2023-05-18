<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];
        if ($this->route()->getActionMethod() == 'login') {
            $rules = $this->login();
        } 
        return $rules;
    }

    public function login()
    {
        return [
            'email' => ['required','email'],
            'password' => ['required'],
        ];
    }

}
