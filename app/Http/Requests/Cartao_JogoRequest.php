<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Cartao_JogoRequest extends FormRequest
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
            'cartao_id' => 'required',
            'jogo_id' => 'required'
        ];
    }
}
