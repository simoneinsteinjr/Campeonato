<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JogoRequest extends FormRequest
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
            'dataJogo' => 'required',
            'situacao' => 'required',
            'resultado' => 'required',
            'jornada_id' => 'required',
            'equipa_id' => 'required',
            'campo_id' => 'required'
        ];
    }
}
