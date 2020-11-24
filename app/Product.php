<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'text', 'type'
    ];

    public function type() {
        return $this->belongsTo('App\Type');
    }
}
