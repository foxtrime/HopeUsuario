<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoajuridica extends Model
{
    protected $fillable = [
    	
        'razaosocial',
        'cnpj',
    	'nomepessoacontato',
    	'telefone',
        'endereco'
    ];
}
