<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function getRouteKeyName() {
        return 'slug';
    }

    public function products() {
        return $this->hasMany('App\Models\Product');
    }
}
