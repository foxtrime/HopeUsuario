<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoafisica extends Model
{
    protected $fillable = [
    	
        'nome',
        'cpf',
    	'rg',
    	'telefone',
        'endereco',
        'sexo',
        'user_id'
    ];

}
