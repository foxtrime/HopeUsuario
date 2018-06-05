<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoaJuridicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('pessoajuridica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razaosocial')          ->nullable();
            $table->string('cnpj')                 ->nullable();
            $table->string('telefone')             ->nullable();
            $table->string('endereco')             ->nullable();
            $table->string('nomepessoacontato')    ->nullable();
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
