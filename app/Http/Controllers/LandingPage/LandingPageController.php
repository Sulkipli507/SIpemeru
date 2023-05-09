<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function index (){
        $rooms = Room::all();
        return view('landingpage.index', compact('rooms'));
    }

    public function getData()
    {
        $loans = Loan::where('status', 'disetujui')->get(); // mengambil semua data loans
        $events = array();

        foreach ($loans as $loan) {
            $event = array(
                'title' => $loan->room->name,
                'start' => $loan->start_date,
                'end' => $loan->end_date,
            );
            array_push($events, $event);
        }

        return view('landingpage.calendar')->with('events', json_encode($events)); // mengirim data dalam format JSON ke view
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
            'letter' => 'required|mimes:pdf',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $loan = new Loan;
        $loan->user_id = Auth::user()->id;
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
