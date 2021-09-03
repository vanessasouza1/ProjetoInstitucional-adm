<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;
use App\Membro;
use App\User;
use App\Departamento;
use App\Contato;

class ComumController extends Controller
{

    public function retornaIndex()
    {
        return view('index');
    }

    public function retornaQuemSomos()
    {
        return view('quemsomos');
    }

    public function retornaNossoTime()
    {
        $membros = Membro::all();

        return view('nossotime', compact('membros'));

    }

    public function retornaEventos(){
        $eventos = Evento::all();
        return view('index', compact('eventos'));

    }

    public function enviaMensagemContato(Request $request){
        $contato = new Contato;
        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->mensagem = $request->mensagem;

        $contato->save();
        //return view('membroAdm');
        return redirect()->intended('/');
    }

}