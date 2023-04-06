<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index (){
        $rooms = Room::all();
        return view('landingpage.index', ['rooms' => $rooms]);
    }
}
