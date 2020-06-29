<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class voituresRequest extends FormRequest
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
            'marque' => 'required',
            'modele'=>'required|Integer|min:4',
            'matricule'=>'required|min:8|max:12',
            'numassurances'=> 'required|min:6|max:10',
            'kilometrage'=>'required|min:0|max:8',
            'nombreplaces'=>'required',
            'puissance'=>'required|min:3|max:5'
        ];
    }
}
