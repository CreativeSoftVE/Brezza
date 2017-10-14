<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravelista\Comments\Comments\Traits\Comments;

class Product extends Model
{
    use Sluggable;
    use Comments;
    protected $table = "products";
    protected $fillable = ['name','description','category_id', 'name2', 'description2', 'detail', 'detail2'];
    
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
    
    public function scopeSearch($query, $name){
        return $query->where('name', 'LIKE', "%$name%");
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
