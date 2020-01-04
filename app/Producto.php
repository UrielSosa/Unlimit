<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function categoria(){
        return $this->hasMany('App\Category','category_id');
    }

}
