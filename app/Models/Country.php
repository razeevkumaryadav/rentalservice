<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\Locaion;
class Country extends Model
{
    use HasFactory;

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
