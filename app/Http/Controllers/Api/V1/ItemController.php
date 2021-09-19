<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

use App\Http\Traits\LocationTrait;

class ItemController extends Controller
{
    use LocationTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data'=>Item::with('locations','itemtypes')->get()]);
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
        $locationId = $this->LocationStore($request);
        $userId = 1;
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
