<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRopasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ropas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('foto');
            $table->string('tipo_ropa');
            $table->float('precio');

            $table->unsignedBigInteger('talla_id');
            $table->foreign('talla_id')
            ->references('id')
            ->on('tallas');  

            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')
            ->references('id')
            ->on('colors'); 

            $table->unsignedBigInteger('temporada_id');
            $table->foreign('temporada_id')
            ->references('id')
            ->on('temporadas'); 

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
        Schema::dropIfExists('ropas');
    }
}
