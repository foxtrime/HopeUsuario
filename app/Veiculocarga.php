<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculocarga extends Model
{
	protected $table = "veiculocarga";

     protected $fillable = [
    	
        'placa',
        'modelo',
    	'tipocaminhao',
    	'user_id'	
    ];    

}
