<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agente', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumtext('foto')           ->nullable();
            $table->string('nome');
            $table->string('cpf');
            $table->string('rg');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('email')->unique();
            $table->string('sexo');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
