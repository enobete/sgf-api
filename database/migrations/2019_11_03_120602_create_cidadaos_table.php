<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidadaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('tipo_doc_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipo_doc_id')->references('id')->on('tipo_docs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidadaos');
    }
}
