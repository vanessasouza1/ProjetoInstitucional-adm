<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Evento;
use App\Membro;
use App\User;




class AdministradorController extends Controller
{

    public function retornaViewLogin(){
        return view('auth.login');
    }

    public function logar(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:8',
        ]);

        $credentials= ['email' =>$request->email, 'password'=>$request->password];
        if(Auth::attempt($credentials)){
            return redirect()->intended('/membroAdm/view');
        }else{
            return redirect()->back()->with('msg','Acesso negado');
        }

    }


    /*****************************************Retorna views******************************************/
    public function retornaViewMembros(){
        $membros = Membro::all();
        return view('membroAdm', compact('membros'));
        //return view('membroAdm');
    }

    public function retornaViewEventos(){
        $eventos = Evento::all();
        return view('eventosAdm', compact('eventos'));
        //return view('eventosAdm');
    }

    public function retornaViewCadastroMembro(){

        return view('cadastrarMembro');
    }

    public function retornaViewCadastroEvento(){
        return view('cadastrarEvento');
    }

    

    public function retornaViewAlteraMembro($id){
        $membro = Membro::where('idMembro',$id)->first();
       

        return view('alterarMembro', compact('membro'));

    }

    public function retornaViewAlteraEvento($id){
   
        $evento = Evento::where('idEvento',$id)->first();
       

        return view('alterarEvento', compact('evento'));

   
    }
    

    /*********************************************Cadastros*******************************************/

    public function cadastroMembro(Request $request){//request
       
        $membro = new Membro;
        $membro->nome = $request->nome;
        $membro->funcao = $request->funcao;
        $membro->idDepartamento = $request->idDepartamento;

        $membro->save();
        //return view('membroAdm');
        return redirect()->intended('/membroAdm/view');
    }

    public function cadastroEvento(Request $request){
      
        $evento = new Evento;
       
        $evento->data = $request->data;
        $evento->nome = $request->nome;
        $evento->local = $request->local;
        $evento->horario = $request->horario;

        $evento->save();
        return redirect()->intended('/eventosAdm/view');

    }

    /******************************************Atualizações*******************************************/
    public function atualizaMembro(Request $request, $id){ 
        $membro = Membro::find($id);

        $membro->update([
            'idDepartamento' => $request->idDepartamento,
            'nome' => $request->nome,
            'funcao' => $request->funcao

        ]);

        return redirect()->intended('/membroAdm/view');
    }

    public function atualizaEvento(Request $request, $id){
        $evento = Evento::find($id);
        $evento->update([
            'data' => $request->data,
            'nome' => $request->nome,
            'local' => $request->local,
            'horario' => $request->horario,

        ]);

        return redirect()->intended('/eventosAdm/view');
    }

    /******************************************Exclusões**********************************************/
    public function deletaMembro($id){
   
      $membro = Membro::find($id);
      $membro->delete();

      return redirect()->intended('/membroAdm/view');
    }

    public function deletaEvento($id){
        $evento = Evento::find($id);
        $evento->delete();

      return redirect()->intended('/eventosAdm/view');


    }


}