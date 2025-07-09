<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request){
        return view('login');
    }
    public function logindata(Request $request){
        $username = $request->input('username');
        return redirect()->route('dashboard',['username' => $username]);
    }
    public function dashboard(Request $request){
        $username = $request->query('username');
        return view('dashboard', compact('username'));
    }
    public function profile(Request $request){
        $username = $request->query('username');
        return view('profile', compact('username'));
    }
}
