<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\product;
use App\Models\User;

class HomePageController extends Controller
{
    //
    public function homePage(Request $request){
        $searchQuery = $request->query('search');
        $products = product::where("name", "LIKE", "%$searchQuery%")->paginate(100)->appends(['search'=>$searchQuery]);
        return view('home',compact('products'));
    }

    public function userProfile(){
        $users = User::all();
        return view('profile')->with('users', $users);
    }
}
