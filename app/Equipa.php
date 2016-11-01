<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipa extends Model
{
    protected $fillable = [
        'nome',
        'victorias',
        'empates',
        'derrotas',
        'golosMarcados',
        'golosSofridos',
        'descricao'
    ];

    public function Jogadores(){
        return $this->hasMany('App\Jogadores');
    }

    public function Classificacao(){
        return $this->hasMany('App\Classificacao');
    }

}
