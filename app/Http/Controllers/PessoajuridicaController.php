<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Pessoajuridica;
use App\User;

class PessoajuridicaController extends Controller
{
   
    public function index()
    {
        
        return view ('pessoajuridica.dadospessoaispj');
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //Pega o funcionario logado
        $pj = Auth::user();
        $dados = Pessoajuridica::where('user_id', $id)->get();

        return view ('pessoajuridica.dadospessoaispj',compact('pj','dados'));
    }

    
    public function update(Request $request, $id)
    {
        //Pega a Pessoa fisica pela chave estrangeira
        $pj = Pessoajuridica::where('user_id', $id)->first();

        //dd($pf);
        //Valida os dados
         $this->validate($request, [
             'razaosocial'            => 'required|max:255',
             'cnpj'                   => 'required',
             'telefone'               => 'required',
             'endereco'               => 'required',
             'nomepessoacontato'      => 'required',
            
         ]);

        //dd($pf);

        $pj->fill($request->all());
       
        //dd($pf->toArray());
       
        $pj->save();

        return redirect(url('/home'));
    }

    
    public function destroy($id)
    {
        
    }
}
