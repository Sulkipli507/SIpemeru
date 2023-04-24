<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countRoom = Room::count();
        $countUser = User::count();
        $countLoan = Loan:: where('status', 'disetujui')->count();

        $countLoanUser = Loan::where('user_id', auth()->id())->get()->count();
        
        return view('admin.dashboard.home', compact('countRoom','countUser','countLoan','countLoanUser'));
    }
}
