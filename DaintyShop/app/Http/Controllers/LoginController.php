<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credentials = (['email' => $request->email, 'password' => $request->password]);

        if(!Auth::attempt($credentials, $request->remember_me)){
            return redirect()->back()->withErrors(new MessageBag(['your username or password is incorrect']));
        }

        return redirect('/')->with('success', 'Login successfull!');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login')->with('successLogOut', 'Logout successfull! Please Login');
    }
}
