<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Num extends Model
{
    //
    public function num()
    {
        return $this->belongsTo('App\Post');
    }
}
