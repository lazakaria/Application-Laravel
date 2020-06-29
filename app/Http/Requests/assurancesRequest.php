<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class assurancesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'agence_assurances' => 'required',
            'numassurances'=>'required|Integer',
            'contact'=>'required|min:5|max:20',
            'tel'=> 'required|min:10|max:10',
            'date_debut'=>'required|date',
            'date_fin'=>'required|date',
            'type'=>'required'

            
        ];
    }
}
