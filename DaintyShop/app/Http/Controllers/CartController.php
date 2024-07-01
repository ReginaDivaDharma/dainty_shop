<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\User;
use App\Models\cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //
    public function showCart(Request $request){
        $users = DB::table('users')->where('id', $request->route('id'))->first();
        $products = product::all();
        $carts = DB::table('users')
                        ->join('carts','carts.user_id', '=','users.id')
                        ->join('products','products.id', '=','carts.product_id')
                        ->get();
    
        return view('cart')->with('users', $users)->with('products', $products)->with('carts', $carts);
    }

    public function addToCart(Request $request){
        $quantity = $request->input('quantity');
        $products = product::findOrFail($request->input('product_id'));
        $users = User::findOrFail($request->input('user_id'));
        $this->validate($request, [
            'quantity' => 'required|integer'
        ]);

        DB::table('carts')->insert([
            'user_id' => $users->id,
            'product_id' => $products->id,
            'quantity' => $quantity,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect('/')->with('successCart', 'Product successfully added to cart!');
    }

    public function deleteCart(Request $request){
        DB::table('carts')->where('id', $request->route('id'))->delete();
        return redirect('/');
    }
}
