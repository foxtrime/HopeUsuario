<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Pessoafisica;
use App\User;

class PessoafisicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view ('pessoafisica.dadospessoaispf');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pf = Auth::user($id);
        return view ('pessoafisica.dadospessoaispf',compact('pf'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //$pf = Pessoafisica::find($id);
        $pf = Pessoafisica::all();
        $pf = $request->all();

        dd($pf);

        //$pf->fill($request->all());

        $pf->save();

        return redirect(url('/home'));
        
        // $this->validate($request, [
        //     'nome'                  => 'required|max:255',
        //     'cpf'                   => 'required',
        //     'rg'                    => 'required',
        //     'telefone'              => 'required',
        //     'endereco'              => 'required',
        //     'sexo'                  => 'required'
        // ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
