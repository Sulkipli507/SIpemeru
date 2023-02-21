<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

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
        ]);
        Room::create($request->all());
        return redirect()->route("room-index");
    }

    public function index(){
        $rooms = Room::all();
        return view("admin.room.index", compact("rooms"));
    }

    public function destroy($id){
        $room = Room::where("id", $id)->first();
        $room->delete();
        return redirect()->route("room-index");
    }

    public function edit($id){
        $room = Room::where("id", $id)->first();
        return view("admin.room.edit", compact("room"));
    }

    public function update(Request $request, $id){
        $room = Room::where("id", $id)->first();
        $room->update($request->all());
        return redirect()->route("room-index");
    }
}