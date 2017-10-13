<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BenefitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('benefits')->insert([
            'titulo1'  => 'CONSTANTE INNOVACIÓN',
            'titulo2'  => 'FACILIDADES DE INTEGRACIÓN',
            'titulo3'  => 'COOPERACIÓN EFECTIVA',
            'titulo4'  => 'CRECIMIENTO SIN LÍMITES',
            'descripcion1'  => 'Creamos herramientas de alto valor agregado que potencian la inteligencia de negocios y la cooperación, apuntando a nichos desatendidos dentro de las más novedosas tendencias en economía integrativa, lo que asegura la diferenciación y asertividad dentro de los mercados mundiales.',
            'descripcion2'    => 'Los intercambios de asistencia técnica y comercial que promovemos responden a metas de avance comprometido en tiempo y espacio, que representan ahorros y ganancias para todos los aliados que se articulan según sus funciones y capacidades específicas.',
            'descripcion3'  => 'Los socios de proyectos y aliados estratégicos de Brezza Project, S.A., pueden escoger las formas de cooperación técnica y comercial que más se ajusten a sus necesidades, que van desde la articulación puntual en inversiones temporales hasta la participación estable como socio de proyectos o socio corporativo.',
            'descripcion4'    => 'El apoyo de diferentes aliados estratégicos debidamente articulados, permite que nuestros productos y servicios tengan una mayor penetración de mercado con menor esfuerzo y recursos en los procesos requeridos, lo cual se traduce en estabilidad y escalabilidad financiera en entornos complejos.',
            
            'titulo12'  => 'CONSTANTE INNOVACIÓN',
            'titulo22'  => 'FACILIDADES DE INTEGRACIÓN',
            'titulo32'  => 'COOPERACIÓN EFECTIVA',
            'titulo42'  => 'CRECIMIENTO SIN LÍMITES',
            'descripcion12'  => 'Creamos herramientas de alto valor agregado que potencian la inteligencia de negocios y la cooperación, apuntando a nichos desatendidos dentro de las más novedosas tendencias en economía integrativa, lo que asegura la diferenciación y asertividad dentro de los mercados mundiales.',
            'descripcion22'    => 'Los intercambios de asistencia técnica y comercial que promovemos responden a metas de avance comprometido en tiempo y espacio, que representan ahorros y ganancias para todos los aliados que se articulan según sus funciones y capacidades específicas.',
            'descripcion32'  => 'Los socios de proyectos y aliados estratégicos de Brezza Project, S.A., pueden escoger las formas de cooperación técnica y comercial que más se ajusten a sus necesidades, que van desde la articulación puntual en inversiones temporales hasta la participación estable como socio de proyectos o socio corporativo.',
            'descripcion42'    => 'El apoyo de diferentes aliados estratégicos debidamente articulados, permite que nuestros productos y servicios tengan una mayor penetración de mercado con menor esfuerzo y recursos en los procesos requeridos, lo cual se traduce en estabilidad y escalabilidad financiera en entornos complejos.',
        ]);
    }
}
