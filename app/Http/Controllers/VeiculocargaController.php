<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Veiculocarga;


class VeiculocargaController extends Controller
{

    public function index()
    {
        $caminhoes = Auth::user()->Veiculocarga->all();

        return view ('veiculocarga.dadosveiculos', compact('caminhoes'));
    }


    public function create()
    {
         return view ('veiculocarga.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [             
                'placa'                 =>'required',
                'modelo'                =>'required',
                'tipocaminhao'          =>'required',
            ]);

        //Cria um novo veiculo
        $Veiculo = new Veiculocarga($request->all());
        //Pega o id do usuario
        $Veiculo->user_id = Auth::user()->id;
        //Salva Veiculo
        $Veiculo->save();

        return redirect(url('/dadosveiculos'));
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
