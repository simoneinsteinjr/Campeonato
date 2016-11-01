<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edicaos extends Model
{
    protected $fillable = [
        'nrEdicao',
        'dataInicio',
        'dataFim',
        'descricao'
    ];
}
