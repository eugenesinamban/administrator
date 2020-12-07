<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'text',
        'slug'
    ];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function type() {
        return $this->belongsTo('App\Models\Type');
    }
}
