<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benefits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo1', 40);
            $table->string('titulo2', 40);
            $table->string('titulo3', 40);
            $table->string('titulo4', 40);
            $table->text('descripcion1');
            $table->text('descripcion2');
            $table->text('descripcion3');
            $table->text('descripcion4');
            
            $table->string('titulo12', 40);
            $table->string('titulo22', 40);
            $table->string('titulo32', 40);
            $table->string('titulo42', 40);
            $table->text('descripcion12');
            $table->text('descripcion22');
            $table->text('descripcion32');
            $table->text('descripcion42');
            
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
        Schema::dropIfExists('benefits');
    }
}
