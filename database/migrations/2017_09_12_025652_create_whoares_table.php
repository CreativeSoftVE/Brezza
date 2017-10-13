<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhoaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whoares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo1', 80);
            $table->string('titulo2', 80);
            $table->string('descripcion1', 180);
            $table->string('descripcion2', 180);
            
            $table->text('texto1');
            $table->text('texto2');
            $table->text('texto3');
            $table->text('texto4');
            
            $table->text('text1');
            $table->text('text2');
            $table->text('text3');
            $table->text('text4');
            $table->string('img');
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
        Schema::dropIfExists('whoares');
    }
}
