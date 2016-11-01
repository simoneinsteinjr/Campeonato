<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoloRequest extends FormRequest
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
            'tipo' => 'required',
            'jogador_id' => 'required',
            'jogo_id' => 'required'
        ];
    }
}
