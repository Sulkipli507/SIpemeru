<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function create(){
        return view("admin.room.create");
    }

    public function store(Request $request){
        $this->validate($request , [
            'code' => 'required',
            'name' => 'required',
            'capacity' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'facility' => 'required',
        ]);
        
        $rooms = new Room;
        $rooms->code = $request->get('code');
        $rooms->name = $request->get('name');
        $rooms->capacity = $request->get('capacity');

        if($request->file('image')){
 
            $image = $request->file('image')
            ->store('rooms-images', 'public');
            
            $rooms->image = $image;
            } 
        $rooms->facility = $request->get('facility');
        $rooms->save();
        // Room::create($request->all());
        return redirect()->route("room-index")->with('status', 'Sukses insert data room');
    }

    public function index(){
        $rooms = Room::paginate(10);
        return view("admin.room.index", ['rooms' => $rooms]);
    }

    public function destroy($id){
        $rooms = Room::findOrfail($id);
        $rooms->delete();
        return redirect()->route("room-index")->with('status', 'Sukses delete data room');
    }

    public function edit($id){
        $rooms = Room::findOrfail($id);
        return view("admin.room.edit", compact("rooms"));
    }

    public function update(Request $request, $id){
        $rooms = Room::findOrfail($id);
        $rooms->code = $request->get('code');
        $rooms->name = $request->get('name');
        $rooms->capacity = $request->get('capacity');

        $new_image = $request->file('image');
        if($new_image){
            if($rooms->image && file_exists(storage_path('app/public/' . $rooms->image))){
                Storage::delete('public/'. $rooms->image);
            }
            $new_image_path = $new_image->store('rooms-images', 'public');
            $rooms->image = $new_image_path;
        }

        $rooms->facility = $request->get('facility');
        $rooms->save();

        return redirect()->route("room-index")->with('status', 'Sukses update data room');
    }
}