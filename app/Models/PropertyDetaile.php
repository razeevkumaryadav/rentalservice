<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetaile extends Model
{
    use HasFactory;
    protected $fillable = ['no_room',
    'no_bed_room',
    'no_living_room',
    'no_bathroom',
    'no_kitchen',
    'storage',
    'storage',
    'area',
    'road_size',
    'road_type',
    'item_id'];
}
