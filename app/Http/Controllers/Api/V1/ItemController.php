<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

use App\Http\Traits\LocationTrait;
use App\Http\Traits\PhotoTrait;

class ItemController extends Controller
{
    use LocationTrait,PhotoTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data'=>Item::with('locations','itemtypes','photos','propertydetailes','extrafeatures.parkinglots')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $locationId = $this->LocationStore($request);
        $userId = 1;//This need to replaced with user loge in
        $store = Item::create([
            'name'=>$request->name,
            'item_type_id'=>$request->item_type_id,
             'location_id'=>$locationId,
             'owner_id'=>$userId,
             'price_per_unit'=>$request->price_per_unit,
             'unit_id'=>$request->unit_Id,
             'description'=>$request->description,
             'status'=>$request->status
        ]);

        // storing the property detailes of Realstate
       $store->propertydetailes()->create([
                    'no_room'=>$request->noroom,
                    'no_bed_room'=>$request->nobedroom,
                    'no_bathroom'=>$request->nobathroom,
                    'no_living_room'=>$request->nolivingroom,
                    'storage'=>$request->storage,
                    'no_kitchen'=>$request->nokitchen,
                    'area'=>$request->area,
                    'road_size'=>$request->roadsize,
                    'road_type'=>$request->roadtype,
       ]);

    //    storing the extra features of the Realstate
   $extrafe= $store->extrafeatures()->create([
        'wifi'=>$request->wifi,
        'drinking_water'=>$request->drinkingwater
    ]);
    // storing parkinglots
  $extrafe->parkinglots()->create([
    'no_two_wheeler'=>$request->twowheeler,
    'no_four_wheeler'=>$request->fourwheeler
  ]);
// storing the image
       if($request->image)
        {
         
            $this->PhotoStore($request,$store);
         }
        if(!is_null($store))
        return response()->json(['message'=>'Item stored Succecssfully']);
        else
        return response()->json(['message'=>'Item not able to store currently']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
