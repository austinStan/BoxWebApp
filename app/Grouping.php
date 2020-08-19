<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grouping extends Model
{
    public function products(){
        return $this->belongsToMany(Product::class);
   }
}
