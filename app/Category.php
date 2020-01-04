<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function productos(){
        return $this->belongsTo('App\Producto', 'categoy_id');
    }
}
