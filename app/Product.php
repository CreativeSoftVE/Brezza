<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;
    protected $table = "products";
    protected $fillable = ['name','description','category_id'.'user_id'];
    
    public function category(){
        return $this-> belongsTo('App\Category');
    }
    
     public function user(){
        return $this-> belongsTo('App\User');
    }
    
    public function images(){
        return $this-> hasMany('App\Image');
    }
    
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
    
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
    */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
