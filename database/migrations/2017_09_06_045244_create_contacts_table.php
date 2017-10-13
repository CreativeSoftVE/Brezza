<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo1', 80);
            $table->string('titulo2', 80);
            $table->string('descripcion1', 180);
            $table->string('descripcion2', 180);
            $table->string('nombreCompania', 80);
            $table->text('direccion1');
            $table->text('direccion2');
            $table->string('telefono', 12);
            $table->string('facebook', 120);
            $table->string('twitter', 120);
            $table->string('instagram', 120);
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
        Schema::dropIfExists('contacts');
    }
}
