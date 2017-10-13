<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = ['name', 'description', 'landing1', 'landing2', 'icon', 'banner'];
    
    public function products(){
        return $this->hasMany('App\Product');
    }
}
