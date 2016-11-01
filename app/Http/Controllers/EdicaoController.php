<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Edicaos;
use App\Http\Requests\EdicaoRequest;
use App\Http\Requests;

class EdicaoController extends Controller
{
    public function index()
    {
        $edicoes = Edicaos::all();
        return view('edicoes.index', compact('edicoes'));
    }

    public function create()
    {
        return view('edicoes.create');
    }

    public function store(EdicaoRequest $rq)
    {
        $edicao = new Edicaos(array(
            "nrEdicao" => $rq->get("nrEdicao"),
            "dataInicio" => $rq->get("dataInicio"),
            "dataFim" => $rq->get("dataFim"),
            "descricao" => $rq->get("descricao")
        ));

        $edicao->save();
        session()->flash('flash_message', 'Adicionado Com Sucesso');
        return redirect('indexAdmin');
    }

    public function show($id)
    {
        $edicao = Edicaos::find($id);
        return view('edicoes.show', compact('edicao'));
    }

    public function edit($id)
    {
        $edicao = Edicaos::find($id);
        return view('edicoes.edit', compact('edicao'));
    }

    public function update(EdicaoRequest $rq, $id)
    {
        $edicao2 = array(
            "nrEdicao" => $rq->get("nrEdicao"),
            "dataInicio" => $rq->get("dataInicio"),
            "dataFim" => $rq->get("dataFim"),
            "descricao" => $rq->get("descricao")
        );
        $edicao = Edicaos::find($id);
        $edicao->update($edicao2);
        session()->flash('flash_message', 'Actualizado Com Sucesso');
        return redirect('equipas');
    }

    public function destroy($id)
    {
        Edicaos::find($id)->delete();
        session()->flash('flash_message', 'Removido Com Sucesso');
        return redirect('edicoes');
    }
}
