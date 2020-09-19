<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Number;
use App\Models\Sport;
use Config;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() 
    {
        return view('actual.welcome')->with([
            'user' => Auth::user()
        ]);  
    }

    public function profile($id)
    {
        return view('profile')->with([
            'user' => User::where('id', $id)->first()
        ]);
    }

    public function sports()
    {
        return view('sports')->with([
            'sports' => Sport::all()
        ]);
    }

    public function sport($id)
    {
        return view('sport')->with([
            'sport' => Sport::where('id', $id)->first()
        ]);
    }

    public function numbers()
    {
        return view('numbers')->with([
            'numbers' => Number::all()
        ]);
    }

    public function number($id)
    {
        return view('number')->with([
            'number' => Number::where('id', $id)->first()
        ]);
    }

    public function bidding()
    {
        return view('bidding')->with([
            'user' => Auth::user(),
            'currentRound' => Config::get('app.bidding_round')
        ]);
    }

}
