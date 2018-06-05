<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaFisicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pessoafisica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')          ->nullable();
            $table->string('cpf')           ->nullable();
            $table->string('rg')            ->nullable();
            $table->string('telefone')      ->nullable();
            $table->string('endereco')      ->nullable();
            $table->enum('sexo',[
                                    'Feminino', 
                                    'Masculino', 
                                ])          ->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
