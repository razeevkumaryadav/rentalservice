<?php
namespace App\Http\Traits;
use Illuminate\Http\Request;
use App\Models\Photo;

trait PhotoTrait{

public function PhotoIndex($itemId)
{
    return Photo::where('item_id',$itemId);
}
public function PhotoStore(Request $request,$store)
{
    foreach($request->image as $index=>$image)
    {   
    
     $filename = now().'-'.$index.'.'.$image->getClientOriginalExtension();
     $location = 'public/Images/Realstate/'.$request->name;
     $image->move($location,$filename);
     $store->photos()->create([
        'name'=>$request->photo_name[$index]?$request->photo_name[$index]:'',
        'location'=>$location.'/'.$filename
     ]);
}

}
}