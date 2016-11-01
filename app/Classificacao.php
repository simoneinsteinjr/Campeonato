<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classificacao extends Model
{
    protected $fillable = [
        'equipa_id',
        'victorias',
        'empates',
        'derrotas',
        'golosMarcados',
        'golosSofridos',
        'pontosGanhos'
    ];

    public function Equipa(){
        return $this->belongsTo('App\Equipa');
    }
}
