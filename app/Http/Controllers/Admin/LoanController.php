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
        return redirect()->route('loan-index');
    }

    public function index(){
        $loan = Loan::with("room")->paginate(5);
        return view('admin.loan.index', compact('loan'));
    }

    public function destroy($id){
        $loan = Loan::findOrfail($id);
        $loan->delete();
        return redirect()->route('loan-index');
    }

    public function edit($id){
        $room = Room::all();
        $loan = Loan::findOrFail($id);
        return view('admin.loan.edit', compact('loan','room'));
    }

    public function update(Request $request, $id){
        $loan = Loan::findOrFail($id);
        $loan->update($request->all());
        return redirect()->route('loan-index');
    }

}
