<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";
    protected $fillable = ['titulo1','titulo2','descripcion1','descripcion2','nombreCompania1','nombreCompania2','direccion1','direccion2','telefono1','telefono2','facebook1','facebook2','twitter1', 'twitter2', 'instagram1', 'instagram2'];
}

