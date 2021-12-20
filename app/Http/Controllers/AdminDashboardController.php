<?php

namespace App\Http\Controllers;

use App\Models\Fixtures;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $fixtures = Fixtures::all();
        return view(
            'admin.pages.index', compact('fixtures'));



    }

    public function admin_fixtures()
    {
        $fixtures = Fixtures::all();
        return view(
            'admin.pages.fixtures.index', compact('fixtures'));
    }
}
