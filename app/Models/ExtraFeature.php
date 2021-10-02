<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ParkingLot;
use App\Models\Item;
class ExtraFeature extends Model
{
    use HasFactory;

    protected $fillable = ['wifi','drinking_water'];

    public function parkinglots()
    {
        return $this->hasOne(ParkingLot::class);
    }
    public function items()
    {
        return $this->belongsTo(Item::class);
    }
}
