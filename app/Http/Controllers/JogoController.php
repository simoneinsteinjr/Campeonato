<?php

namespace App\Http\Controllers;

use App\Equipa;
use App\Jornada;
use Illuminate\Http\Request;

use App\Http\Requests\JogoRequest;
use App\Http\Requests;
use App\Jogo;

class JogoController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all();
        return view('.index',compact('jogos'));
    }

    /**
     *
     */
    public function create()
    {

    }

    public function store(Requests\EquipaRequest $rq)
    {
        $equipes=Equipa::all();
        $numLista=$this->shuffle_nums(0,(count($equipes)-1),10);
        for ($countJornada=0; (count($equipes)) < $countJornada; $countJornada++){

            for ($count=0;$count<5;$count++){
                $jogo = new Jogo(array(
                    "equipa1_id"=>$equipes[$numLista[$count]],
                    "equipa_id"=>$equipes[$numLista[($count+1)]]
                ));
                $jornada = new Jornada(array(
                    "nrJornada"=>$countJornada
                ));
                $jogo->save();
                $jornada->save();
            }
        }

        session()->flash('flash_message', 'Adicionado Com Sucesso');
    }

    public function show($id)
    {
        $jogador=Jogador::find($id);
        return view('jogadores.show',compact('jogador'));
    }

    public function edit($id)
    {
        $jogador=Jogador::find($id);
        return view('jogadores.edit',compact('jogador'));
    }

    public function update(JogadorRequest $rq, $id)
    {
        $jogador2= array (
            "nome" =>$rq->get("nome"),
            "nrCamisa"=>$rq->get("nrCamisa"),
            "posicao"=>$rq->get("posicao")
        );
        $jogador=Jogador::find($id);
        $jogador->update($jogador2);
        session()->flash('flash_message', 'Actualizado Com Sucesso');
        return redirect('jogadores');
    }

    public function destroy($id)
    {
        Jogador::find($id)->delete();
        session()->flash('flash_message', 'Removido Com Sucesso');
        return redirect('jogadores');
    }

    function shuffle_nums($min, $max, $count)
    {
        $nums = range($min, $max);
        shuffle($nums);

        $response = array();
        for($i=0;$i<$count && $i<count($nums);$i++)
        {
            array_push($response, $nums[$i]);
        }

        return $response;
    }
}
