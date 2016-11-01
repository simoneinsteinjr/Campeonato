<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golo extends Model
{
    protected $fillable = [
        'tipo',
        'jogador_id',
        'jogo_id'
    ];
}
