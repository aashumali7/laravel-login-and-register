<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
    //dd($request->all());
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('welcome'); //route
        }
 
        return back()->withErrors([
            'email' => 'Invalid Credentials',
        ])->onlyInput('email');    
    }
}
