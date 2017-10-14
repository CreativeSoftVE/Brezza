<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'titulo1'  => 'Contáctanos',
            'titulo2'  => 'Contact us',
            'descripcion1'  => 'descripcion',
            'descripcion2'    => 'description',
            'nombreCompania'    => 'Brezza Project, S.A.',
            'direccion1'    => 'Barquisimeto, Lara, Venezuela',
            'direccion2'    => 'Barquisimeto, Lara, Venezuela',
            'telefono1'    => '1234567',
            'facebook1'    => 'https://www.facebook.com/brezzaproject/',
            'twitter1'    => 'https://www.twitter.com',
            'instagram1'    => 'https://www.instagram.com',
        ]);
    }
}
