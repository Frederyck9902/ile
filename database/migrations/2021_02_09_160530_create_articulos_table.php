<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_capitulo');
            $table->string("nombre");
            $table->text("contenido");
            $table->string("img")->nullable();
            $table->string("vid")->nullable();
            $table->timestamps();
            $table->foreign("id_capitulo")
                  ->references("id")
                  ->on("capitulos")
                  ->onDelete("cascade")
                  ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
