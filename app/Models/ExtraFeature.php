<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\ParkingLot;
use Models\Item;
class ExtraFeature extends Model
{
    use HasFactory;

    public function parkinglots()
    {
        return $this->belongsTo(ParkingLot::class);
    }
    public function items()
    {
        return $this->belongsTo(Item::class);
    }
}
