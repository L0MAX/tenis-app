<?php

namespace App\Http\Controllers;


use App\Models\Fixtures;
use App\Models\Opponent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpponentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $opponents = Opponent::where('is_selected',0)->get();
        $kofi = $opponents->random(1);
        return view('pages.opponent.index', compact('kofi'));
    }

    public function store(Request $request)
    {
        $fixture = new Fixtures();
        $fixture->user_id =auth()->id();
        $fixture->player1 = Auth::user()->name;
        $fixture->player2 =$request->opponent;


        if ($fixture->save())
        {
            Opponent::where('name',$request->opponent)->update([
                'is_selected' => 1
            ]);

            User::where('id',auth()->id())->update([
                'is_select' => 1
            ]);
            return redirect(route('my.fixture'))->with('info', 'Partner chosen successfully.');

        }

    }

}
