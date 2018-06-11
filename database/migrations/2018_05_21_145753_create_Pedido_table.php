<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('pedido', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hora');
            $table->string('data');
            $table->string('status');
            $table->string('destino');
            $table->string('periculosidade');
            $table->string('tipocarga');   
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
