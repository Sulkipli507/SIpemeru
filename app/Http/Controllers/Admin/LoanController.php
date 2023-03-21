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
        Loan::create([
            'nim'=> $request->nim,
            'name' => $request->name,
            'prodi' => $request->prodi,
            'phone' => $request->phone,
            'address' => $request->address,
            'program' => $request->program,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date   
        ]);
    }
}
