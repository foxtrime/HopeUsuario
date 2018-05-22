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
            $table->string('razaosocial');
            $table->string('cnpj');
            $table->string('telefone');
            $table->string('endereco');
            $table->string('nomepessoacontato');
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
