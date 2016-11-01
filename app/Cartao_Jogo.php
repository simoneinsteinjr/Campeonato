<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartao_Jogo extends Model
{
    protected $fillable = [
        'cartao_id',
        'jogo_id'
    ];
}
