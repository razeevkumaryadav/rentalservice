<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ItemType;
class ItemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['itemtype'=>ItemType::all()]);  
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
        $create = ItemType::create([
            'name'=>$request->itemtype
        ]);
        if($create)
         return response()->json(["message"=>"Item Type Created Successfully"], 200);
        else
         return response()->json(["message"=>"Some Issues Occured wile storing item type"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(['itemtype'=>ItemType::findOrfail($id)]);
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
        $itemtype = ItemType::findOrFail($id)->update(['name'=>$request->itemtype]);
        if($itemtype)
         return response()->json(["message"=>"Item Type Updated Successfully"], 200);
        else
         return response()->json(["message"=>"Some Issues Occured wile storing item type"], 200);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemtype = ItemType::findOrFail($id)->delete();
        if($itemtype)
        return response()->json(["message"=>"Item Type Deleted Successfully"], 200);
       else
        return response()->json(["message"=>"Some Issues Occured while Deleting item type"], 200);
        
    }
}
