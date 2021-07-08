<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnuncioRequest extends FormRequest
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
            'titulo'=>'required|min:3|max:255',
            'descripcion'=>'required|min:3|max:255',
            'precio'=>'required|numeric|min:0',
            'imagen'=> 'sometimes|file|image|mimes:jpg,png,gif,webp|max:2048'
        ];
    }
    
}
