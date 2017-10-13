<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class WhoaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('whoares')->insert([
            'titulo1'    => 'Quiénes Somos?',
            'titulo2'    => 'About us',
            'descripcion1'  => '"Somos mas que un equipo de investigadores,somos economía integrativa"',
            'descripcion2'    => '"We are more than a team of researchers, we are integrative economy"',
            
            'texto1'    => 'Red de investigadores formados en áreas multidisciplinarias que pone en marcha el ingenio y la integración innovadora, para cooperar y apalancar la transición de nuestras sociedades a modos de vida y de negocios más sustentables.',
            'texto2'    => 'Destacar en la generación de productos y servicios innovadores que dinamicen diferentes nichos de mercado, en torno a los nuevos modos de participación social, la nueva arquitectura financiera mundial y el desarrollo local.',
            'texto3'    => 'Facilitar el intercambio de información y la integración entre personas, organizaciones y mercados, a través del diseño y puesta en funcionamiento de innovaciones tecnológicas que contribuyan a su vez con el incremento de la eficiencia, el mejoramiento continuo, la transparencia y la calidad de vida en los segmentos y espacios hacia los que enfocamos nuestra cooperación.',
            'texto4'    => 'La organización responde a criterios de estructura circular, por comité y en red, según la dinámica de sus requerimientos.',
            
            'text1'    => 'A network of researchers trained in multidisciplinary areas that launches ingenuity and innovative integration to cooperate and leverage the transition of our societies to more sustainable ways of life and businesses.',
            'text2'    => 'Highlight in the generation of innovative products and services that stimulate different market niches, around the new modes of social participation, the new global financial architecture and local development.',
            'text3'    => 'Facilitate the exchange of information and integration between people, organizations and markets, through the design and implementation of technological innovations that contribute in turn to increasing efficiency, continuous improvement, transparency and quality of life in the segments and spaces to which we focus our cooperation.',
            'text4'    => 'The organization responds to criteria of circular structure, by committee and in network, according to the dynamics of its requirements.',
            
            'img'  => 'http://oi63.tinypic.com/f1ku2c.jpg',   
            
        ]);
    }
}
