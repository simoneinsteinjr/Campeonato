<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ClassificacaoRequest;
use App\Http\Requests;
use App\Classificacao;
use App\Equipa;

class ClassificacaoController extends Controller
{
    public function index(){
        $equipas = Equipa::orderBy('victorias', 'desc')->orderBy('empates','desc')->get();
        return view('classificacao', compact('equipas'));
    }
}
