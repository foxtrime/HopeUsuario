<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Pessoafisica;
use App\User;

class PessoafisicaController extends Controller
{
    
    public function index()
    {
        
        return view ('pessoafisica.dadospessoaispf');

    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //Pega o funcionario logado
        $pf = Auth::user();
        $dados = Pessoafisica::where('user_id', $id)->get();
        //dd($dados);
        return view ('pessoafisica.dadospessoaispf',compact('pf','dados'));

    }

    public function update(Request $request, $id)
    {
        //Pega a Pessoa fisica pela chave estrangeira
        $pf = Pessoafisica::where('user_id', $id)->first();

        //dd($pf);
        //Valida os dados
         $this->validate($request, [
             'nome'                  => 'required|max:255',
             'cpf'                   => 'required',
             'rg'                    => 'required',
             'telefone'              => 'required',
             'endereco'              => 'required',
             'sexo'                  => 'required'
         ]);

        //dd($pf);

        $pf->fill($request->all());
       
        //dd($pf->toArray());
       
        $pf->save();

        return redirect(url('/home'));
        

    }

    public function destroy($id)
    {
        //
    }
}
