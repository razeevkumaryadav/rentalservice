<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\Country;
class Location extends Model
{
    use HasFactory;

    protected $fillable = ['building_no','street_no',
    'street_name','chowk_name','zipcode','city','state','longitude','latitude','country_id'];
    public function countries()
    {
       return $this->belongsTo(Country::class);
    }
}
