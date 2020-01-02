<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function locations() {
        return $this->belongsToMany(Product::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }
}
