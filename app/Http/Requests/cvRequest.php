<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cvRequest extends FormRequest
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
              
               'cin'=> 'required |min:4|max:10',
               'nom'=> 'required|min:4|max:10',
               'prenom'=> 'required|min:3|max:200',
               'type'=> 'required',
               'produit'=> 'required',
               'tel'=> 'required',
                'mesage'=> 'required',
               'photo'=> 'required',





        ];
    }
}
