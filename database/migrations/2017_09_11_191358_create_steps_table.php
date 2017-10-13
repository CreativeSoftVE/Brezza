<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo1', 80);
            $table->string('titulo2', 80);
            $table->string('descripcion1', 180);
            $table->string('descripcion2', 180);
            
            $table->string('paso11', 25);
            $table->string('paso12', 25);
            $table->string('paso21', 25);
            $table->string('paso22', 25);
            $table->string('paso31', 25);
            $table->string('paso32', 25);
            $table->string('paso41', 25);
            $table->string('paso42', 25);
            $table->string('paso51', 25);
            $table->string('paso52', 25);
            
            $table->string('desc11', 80);
            $table->string('desc12', 80);
            $table->string('desc21', 80);
            $table->string('desc22', 80);
            $table->string('desc31', 80);
            $table->string('desc32', 80);
            $table->string('desc41', 80);
            $table->string('desc42', 80);
            $table->string('desc51', 80);
            $table->string('desc52', 80);
            
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('img4');
            $table->string('img5');
            
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
        Schema::dropIfExists('steps');
    }
}
