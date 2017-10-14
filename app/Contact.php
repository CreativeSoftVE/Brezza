<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
    protected $fillable = ['titulo1','titulo2','descripcion1','descripcion2','nombreCompania1','direccion1','direccion2','telefono1','facebook1','twitter1', 'instagram1'];
}

