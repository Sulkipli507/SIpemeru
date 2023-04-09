<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Room;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index (){
        $rooms = Room::all();
        return view('landingpage.index', ['rooms' => $rooms]);
    }

    public function store(Request $request){
        $this->validate($request , [
            'nim' => 'required|unique:loans',
            'name' => 'required',
            'prodi' => 'required',
            'room_id' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'program' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        Loan::create($request->all());
        return redirect()->route('landingpage');
    }

}
