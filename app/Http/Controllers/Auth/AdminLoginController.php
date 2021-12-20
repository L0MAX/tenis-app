<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function adminLoginForm()
    {
        return view('admin.auth.login');
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

//        Get credentials
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

//        Attempt to login user
        if (Auth::guard('admin')->attempt($credentials, $request->remember)){
            return redirect()->intended(route('dashboard'));
        }
//        if unsuccessful redirect
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login.admin');
    }
}
