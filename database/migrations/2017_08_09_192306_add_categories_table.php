<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->string('description');
            $table->string('landing1');
            $table->string('landing2');
            $table->string('icon');
            $table->string('banner');
            $table->timestamps();
        });
    }

     
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
