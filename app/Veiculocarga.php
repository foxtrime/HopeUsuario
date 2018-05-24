<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculocarga extends Model
{
     protected $fillable = [
    	
        'placa',
        'modelo',
    	'tipocaminhao'	
    ];
}
