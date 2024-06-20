<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientesTable extends Migration
{
    public function up()
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('receta_id');
            $table->string('nombre');
            $table->string('cantidad');
            $table->timestamps();

            $table->foreign('receta_id')->references('id')->on('recetas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ingredientes');
    }
}
