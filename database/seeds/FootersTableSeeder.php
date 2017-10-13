<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class FootersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'contenido1'  => 'contenido 1 en español',
            'content1'    => 'contenido 1 en ingles',
            
            'contenido2'  => 'contenido 2 en español',
            'content2'    => 'contenido 2 en ingles',
            
            'contenido3'  => 'contenido 3 en español',
            'content3'   => 'contenido 3 en ingles',
        ]);
    }
}
