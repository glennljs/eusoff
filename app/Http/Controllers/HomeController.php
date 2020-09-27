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
            'user' => User::where('id', $id)->first(),
            'gender_subject' => User::where('id', $id)->first()->gender == "male" ? "He" : "She",
            'gender_object' => User::where('id', $id)->first()->gender == "male" ? "His" : "Her"
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

    public function number($id, $gender)
    {
        return view('number')->with([
            'number' => Number::where('id', $id)->first(),
            'bids' => $gender == 1
                ? Number::where('id', $id)->first()->maleBids()->get()
                : Number::where('id', $id)->first()->femaleBids()->get(),
            'gender' => $gender
        ]);
    }

    public function bidding()
    {
        return view('bidding')->with([
            'user' => Auth::user(),
            'currentRound' => Config::get('app.bidding_round')
        ]);
    }

    public function rules()
    {
        return view('rules');
    }

}
