<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'text',
        'slug',
        'description',
        'image_url',
        'likes'
    ];

    protected $attributes = [
        'image_url' => '/assets/images/no_image.svg'
    ];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function type() {
        return $this->belongsTo('App\Models\Type');
    }
}
