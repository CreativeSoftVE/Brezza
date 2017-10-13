<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $table = "benefits";
    protected $fillable = ['titulo1','titulo2','titulo3','titulo4','titulo12','titulo22','titulo32','titulo42','descripcion1','descripcion2','descripcion3','descripcion4','descripcion12','descripcion22','descripcion32','descripcion42'];
}
