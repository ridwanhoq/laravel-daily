<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function countries()
    {
        return $this->hasMany(City::class);
    }

    public function shops()
    {
        return $this->hasManyThrough(Shop::class, City::class);
    }
}
