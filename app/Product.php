<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function groupings(){
            return $this->belongsToMany(Grouping::class);
    }
}
