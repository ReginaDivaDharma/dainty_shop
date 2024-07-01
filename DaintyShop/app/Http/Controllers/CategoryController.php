<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class CategoryController extends Controller
{
    //
     public function categoryPage(category $categories){
        $products = product::All();
        $products1 = product::where('category_id', '=', 1)->paginate(10);
        $products2 = product::where('category_id', '=', 2)->paginate(10);
        $products3 = product::where('category_id', '=', 3)->paginate(10);

        return view('category')->with('categories', $categories)->with('products', $products)->with('products1', $products1)->with('products2', $products2)->with('products3', $products3);
    }
}
