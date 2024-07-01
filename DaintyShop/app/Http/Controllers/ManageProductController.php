<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ManageProductController extends Controller
{
    //
    public function manageProductSearch(Request $request){
        $searchQuery = $request->query('search');
        $products = product::where("name", "LIKE", "%$searchQuery%")->paginate(100)->appends(['search'=>$searchQuery]);
        return view('manageProduct',compact('products'));
    }

    public function manageProduct(product $products){
        $products = product::paginate(10);
        return view('manageProduct')->with('products', $products);
    }

    public function showAddProd(){
        $categories = category::all();
        return view('add')->with('categories', $categories);
    }

    public function showUpdateProd($id){
        $products = DB::table('products')->where('id', $id)->first();
        $categories = category::all();
        return view('update')->with('categories', $categories)->with('products', $products);
    }
}
