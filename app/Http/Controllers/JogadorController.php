<?php

namespace App\Http\Controllers;
use App\Jogadores;
use Illuminate\Http\Request;

use App\Http\Requests\JogadorRequest;
use App\Http\Requests;
use App\Equipa;
class JogadorController extends Controller
{
    public function index()
    {
        $jogadores = Jogadores::all();
        return view('jogadores.index',compact('jogadores'));
    }

    public function create()
    {
        $equipas=Equipa::pluck('nome','id');
        return view('jogadores.create',compact('equipas'));
    }

    public function store(JogadorRequest $rq)
    {
        $jogador= new Jogadores (array (
            "nome" =>$rq->get("nome"),
            "nrCamisa"=>$rq->get("nrCamisa"),
            "posicao"=>$rq->get("posicao"),
            "equipa_id"=>$rq->get("equipa_id")
        ));

        $jogador->save();
        session()->flash('flash_message', 'Adicionado Com Sucesso');
        return redirect('indexAdmin');
    }

    public function show($id)
    {
        $jogador=Jogadores::find($id);
        return view('jogadores.show',compact('jogador'));
    }

    public function edit($id)
    {
        $jogador=Jogadores::find($id);
        return view('jogadores.edit',compact('jogador'));
    }

    public function update(JogadorRequest $rq, $id)
    {
        $jogador2= array (
            "nome" =>$rq->get("nome"),
            "nrCamisa"=>$rq->get("nrCamisa"),
            "posicao"=>$rq->get("posicao"),
            "equipa_id"=>$rq->get("equipa_id")
        );
        $jogador=Jogadores::find($id);
        $jogador->update($jogador2);
        session()->flash('flash_message', 'Actualizado Com Sucesso');
        return redirect('jogadores');
    }

    public function destroy($id)
    {
        Jogadores::find($id)->delete();
        session()->flash('flash_message', 'Removido Com Sucesso');
        return redirect('jogadores');
    }
}
