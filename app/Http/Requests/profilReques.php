<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profilReques extends FormRequest
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
           'cin'=> 'required',
            'nom'       => 'required',
            'prenom'    => 'required',
            'sexe'       => 'required',
            'adresse'    => 'required',  
            'tel'       => 'required',
            'email'     => 'required|email',
            'birthday' => 'required|date',
            'etude'   => 'required',
            'etudeEtablissement'=> 'required',
            'etudeAnnee'    => 'required',
            'choix_1'        => 'required',
            'choix_2'        => 'required',
 
     
        ];
    }
}
