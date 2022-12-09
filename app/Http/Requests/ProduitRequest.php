<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nomproduit' => 'bail|required|min:1|max:300|string',
            'prixunitaire' => 'bail|required|numeric',
            'ref' => 'bail|required|min:1|max:300|string',
            //'idcategorie' => 'numeric'

        ];
    }
}
