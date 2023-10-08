<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
class LoginController extends Controller
{

    public function index()
    {
        return view('login');
    }

//     public function check(Request $request)
// {
//     echo"hello";
//     $credentials = $request->validate([
//         'email' => ['required', 'email'],
//         'password' => ['required'],
//     ]);
    
//     if (Auth::attempt($credentials)) {
//         return redirect()->route('home'); // Redirect to the home page upon successful login.
//     }

//     // Authentication failed, so return back with an error message.
//     return redirect()->back()->withErrors(['email' => 'Username or Password Invalid!']);
//}


    public function check(Request $request)
    {
        
     $credentials = $request->validate([
     'email' => ['required', 'email'],
     'password' => ['required'],
        ]);
       
        
        if (Auth::attempt($credentials)) 
        {
            return view('home');
         }
          return "<h2>Username or Password Invalid!</h2>";  
       }

}