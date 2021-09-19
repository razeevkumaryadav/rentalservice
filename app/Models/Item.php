<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ItemType;
use App\Models\Unit;
use App\Models\Location;
use App\Models\Photo;
use App\Models\ExtraFeature;
class Item extends Model
{
    use HasFactory;

    protected $fillable=['name','item_type_id','location_id','owner_id','price_per_unit','unit_id','description',
     'status'];
    public function owners()
    {
        return $this->belongsTo(User::class,'id','owner_id');
    }

    public function itemtypes()
    {
        return $this->belongsTo(ItemType::class,'item_type_id');
    }

    public function units()
    {
        return $this->belongsTo(Unit::class);
    }

    public function locations()
    {
        return $this->belongsTo(Location::class,'location_id');
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    public function extrafeatures()
    {
        return $this->hasOne(ExtraFeature::class);
    }
}
