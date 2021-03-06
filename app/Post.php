<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = [];
    //protected $table = "one";
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function num()
    {
        
        return $this->hasOne('App\Num');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    
}
