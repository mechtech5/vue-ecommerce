<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function Products() {
        return $this->belongsToMany(Location::class);
    }
}
