<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipaRequest;
use App\Http\Requests;
use App\Equipa;

class EquipaController extends Controller
{
    public function index()
    {
        $equipas = Equipa::all();
        return view('equipas.index',compact('equipas'));
    }

    public function create()
    {
        return view('equipas.create');
    }

    public function store(EquipaRequest $rq)
    {
        $equipa= new Equipa(array (
            "nome" =>$rq->get("nome"),
            "victorias" =>$rq->get("victorias"),
            "empates" =>$rq->get("empates"),
            "derrotas" => $rq->get("derrotas"),
            "golosMarcados" => $rq->get("golosMarcados"),
            "golosSofridos" =>$rq->get("golosSofridos"),
            "descricao" =>$rq->get("descricao")
        ));

        $equipa->save();
        session()->flash('flash_message', 'Adicionado Com Sucesso');
        return redirect('indexAdmin');
    }

    public function show($id)
    {
        $equipa=Equipa::find($id);
        return view('equipas.show',compact('equipa'));
    }

    public function edit($id)
    {
        $equipa=Equipa::find($id);
        return view('equipas.edit',compact('equipa'));
    }

    public function update(EquipaRequest $rq, $id)
    {
        $equipa2= array (
            "nome" =>$rq->get("nome"),
            "victorias" =>$rq->get("victorias"),
            "empates" =>$rq->get("empates"),
            "derrotas" => $rq->get("derrotas"),
            "golosMarcados" => $rq->get("golosMarcados"),
            "golosSofridos" =>$rq->get("golosSofridos"),
            "descricao" =>$rq->get("descricao")
        );
        $equipa=Equipa::find($id);
        $equipa->update($equipa2);
        session()->flash('flash_message', 'Actualizado Com Sucesso');
        return redirect('equipas');
    }

    public function destroy($id)
    {
        Equipa::find($id)->delete();
        session()->flash('flash_message', 'Removido Com Sucesso');
        return redirect('equipas');
    }
}
