<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return [
            //regles de validació
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'poblacion'=> ['required','string','min:3', 'max:255'],
            'telefono' => ['required','string', 'max:32'],
            'nacimiento'=> ['nullable','date'],
            'imagen'=> ['sometimes','file','image','mimes:jpg,png,gif,webp','max:2048']
        ];
    }
}
