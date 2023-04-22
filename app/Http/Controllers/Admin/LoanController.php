<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Room;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index(Request $request){
        $loan = Loan::with("room")->paginate(5);

        $filterKeyword = $request->get('name');
        if($filterKeyword){
            $loan = Loan::where("name", "LIKE",
           "%$filterKeyword%")->paginate(5);
        }

        return view('admin.loan.index', compact('loan'));
    }

    public function indexUser(){
        $loanUser = Loan::where('user_id', auth()->id())->get();
        return view('admin.loan.indexUser', compact('loanUser'));
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
