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
        // $loans = Loan::where('status', 'disetujui')->get();
        return view('landingpage.index', compact('rooms'));
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
            'letter' => 'required|mimes:pdf',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $loan = new Loan;
        $loan->nim = $request->get('nim');
        $loan->name = $request->get('name');
        $loan->prodi = $request->get('prodi');
        $loan->room_id = $request->get('room_id');
        $loan->phone = $request->get('phone');
        $loan->address = $request->get('address');
        $loan->program = $request->get('program');
        if($request->file('letter')){
 
            $letter = $request->file('letter')
            ->store('loan-letter', 'public');
            
            $loan->letter = $letter;
            }
        $loan->start_date = $request->get('start_date');
        $loan->end_date = $request->get('end_date');
        
        $loan->save();
        return redirect()->route('landingpage');
    }


}
