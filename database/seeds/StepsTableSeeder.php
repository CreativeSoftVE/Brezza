<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('steps')->insert([
            'titulo1'    => 'Participar en nuestros proyectos es muy fácil',
            'titulo2'    => 'Participating in our projects is very easy',
            
            'descripcion1'  => 'Cambia tu vida con nuestros innovadores proyectos en 5 simples pasos',
            'descripcion2'    => 'Change your life with our innovative projects in 5 simple steps',
            
            'paso11'  => 'Escoge',
            'paso12'  => 'Choose',
            'paso21'  => 'Regístrate',
            'paso22'  => 'Sign up',
            'paso31'  => 'Evaluación',
            'paso32'  => 'Evaluation',
            'paso41'  => 'Confirmación',
            'paso42'  => 'Confirmation',
            'paso51'  => 'Certificado',
            'paso52'  => 'Certificate',
            
            'desc11'  => 'Selecciona el proyecto de tu interés',
            'desc12'  => 'Select the project of your interest',
            'desc21'  => 'Llena el formulario de registro',
            'desc22'  => 'Fill out the registration form',
            'desc31'  => 'Evaluaremos tu solicitud y te contactaremos',
            'desc32'  => 'We will evaluate your request and we will contact you',
            'desc41'  => 'Valida tu información y confirma tu participación',
            'desc42'  => 'Validate your information and confirm your participation',
            'desc51'  => 'Recibe tu acreditación y haz el seguimiento correspondiente',
            'desc52'  => 'Receive your accreditation and follow up',
            
            'img1'  => 'http://oi63.tinypic.com/f1ku2c.jpg',
            'img2'  => 'http://oi63.tinypic.com/f1ku2c.jpg',
            'img3'  => 'http://oi63.tinypic.com/f1ku2c.jpg',
            'img4'  => 'http://oi63.tinypic.com/f1ku2c.jpg',
            'img5'  => 'http://oi63.tinypic.com/f1ku2c.jpg',
            
        ]);
    }
}
