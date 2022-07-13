<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PizzaRequest extends FormRequest
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
            'nome'=>'required|min:3|max:255',
            'prezzo'=>'required',
            // 'ingredienti'=>'required|min:5',
        ];

    }

    public function messages(){
        return [
            'nome.required' => 'Campo obbligatorio',
            'nome.min' => 'Almeno :min caratteri',
            'nome.max' => 'Al massimo :max caratteri',

            'prezzo.required' => 'Campo obbligatorio',

            // 'ingredienti.required' => 'Campo obbligatorio',
            // 'ingredienti.min' => 'Almeno :min caratteri'
        ];
    }
}
