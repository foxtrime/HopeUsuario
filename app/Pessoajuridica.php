<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoajuridica extends Model
{
	protected $table = "pessoajuridica";
    protected $fillable = [
    	
        'razaosocial',
        'cnpj',
    	'nomepessoacontato',
    	'telefone',
        'endereco',
        'user_id'
    ];
}
