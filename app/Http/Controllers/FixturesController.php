<?php

namespace App\Http\Controllers;

use App\Models\Fixtures;
use App\Models\Opponent;
use Illuminate\Http\Request;

class FixturesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $fixtures = Fixtures::where('user_id', auth()->id())->get();
        return view('pages.fixtures.index', compact('fixtures'));
    }


}
