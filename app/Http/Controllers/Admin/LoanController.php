<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Room;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function create(){
        $room = Room::all();
        return view('admin.loan.create', compact('room'));
    }

    public function store(Request $request){
        $this->validate($request , [
            'nim' => 'required',
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
    }
}
