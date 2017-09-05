<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = ['name'];
    
     public function products()
    {
        return $this->belongsToMany('App\Product')->withTimestamps();
    }
    
    public function scopeSearch($query, $name){
        $query->where('name', 'LIKE', "%$name%");
    }
}
