<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinosTable extends Migration
{
    public function up()
    {
        Schema::create('vinos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bodega_id')->constrained()->onDelete('cascade');
            $table->string('nombre');
            $table->string('tipo');
            $table->integer('anio');
            $table->decimal('precio', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vinos');
    }
}
