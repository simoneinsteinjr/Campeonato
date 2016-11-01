<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $fillable = [
        'dataJogo',
        'situacao',
        'resultado',
        'jornada_id',
        'equipa_id',
        'campo_id'
    ];
}
