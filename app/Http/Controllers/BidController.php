<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BidController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rank.1' => 'required',
            'rank.2' => 'required',
            'rank.3' => 'required',
            'rank.4' => 'required',
            'rank.5' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/bidding')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = Auth::user();
        for ($i = 1; $i <= 5; $i++) {
            Bid::create([
                'user_id' => $user->id,
                'number_id' => $request->rank[$i],
                'priority' => $i
            ]);
        }
        return redirect('/hello');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rank.1' => 'required',
            'rank.2' => 'required',
            'rank.3' => 'required',
            'rank.4' => 'required',
            'rank.5' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/bidding')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = Auth::user();
        foreach (Bid::where('user_id', $user->id)->get() as $b) {
            $b->delete();
        }
        for ($i = 1; $i <= 5; $i++) {
            Bid::create([
                'user_id' => $user->id,
                'number_id' => $request->rank[$i],
                'priority' => $i
            ]);
        }
        return redirect('/hello');
    }

}
