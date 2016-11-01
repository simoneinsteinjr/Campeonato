<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogadores extends Model

{

    protected $fillable = [
        'nome',
        'nrCamisa',
        'posicao',
        'equipa_id'
    ];

    public function Equipa(){
        return $this->belongsTo('App\Equipa');
    }
}
