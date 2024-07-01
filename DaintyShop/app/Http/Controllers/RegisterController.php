<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validation = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|alpha_num',
            // 'confirmpassword' => 'required|min:8|alpha_num|same:password',
            // 'gender' => 'required',
            'role' => 'required',
            // 'dob' => 'before:today|after:01-01-1900',
            // 'country' => 'required'
        ]);

        $validation['password'] = Hash::make($validation['password']);
        // $validation['confirmpassword'] = Hash::make($validation['confirmpassword']);
        User::create($validation);
        
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
