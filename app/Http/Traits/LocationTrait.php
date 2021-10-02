<?php
namespace App\Http\Traits;
use Illuminate\Http\Request;
use App\Models\Location;

trait LocationTrait{

public function LocationIndex($id)
{
    return Location::findOrFail($id);
}
public function LocationStore(Request $request)
{
   $location = Location::create([
    'building_no'=>$request->building_no,
    'street_no'=>$request->street_no,
    'street_name'=>$request->street_name,
    'chowk_name'=>$request->chowk_name,
    'zipcode'=>$request->zipcode,
    'city'=>$request->city,
    'state'=>$request->state,
    'longitude'=>$request->longitude,
    'latitude'=>$request->latitude,
    'country_id'=>$request->country_id
     
   ]);

   return $location->id;
}

public function LocationUpdate(Request $request,$id)
{
   Location::findOrFail($id)->update(
    [
        'building_no'=>$request->building_no,
        'street_no'=>$request->street_no,
        'street_name'=>$request->street_name,
        'chowk_name'=>$request->chowk_name,
        'zipcode'=>$request->zipcode,
        'city'=>$request->city,
        'state'=>$request->state,
        'longitude'=>$request->longitude,
        'latitude'=>$request->latitude,
        'country_id'=>$request->country_id
         
    ]); 
    
    return "Location Update";
  
}
public function LocationDestroy($id)
{
    Location::findOrFail($id)->delete();

    return "Location Delted";
}

}