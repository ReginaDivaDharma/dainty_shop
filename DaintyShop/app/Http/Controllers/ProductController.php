<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //
    public function addProduct(Request $request){
        $name = $request->name;
        $detail = $request->detail;
        $price = $request->price;
        $category = Category::where('name', $request->category)->first();
        $image = $request->file('image');
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'image' => 'required|mimes:jpeg,png,jpg'

        ]);

        Storage::putFileAs('/public/image/', $image, $image->getClientOriginalName());
        DB::table('products')->insert([
            'name' => $name,
            'category_id' => $category->id,
            'image' => $image->getClientOriginalName(),
            'detail' => $detail,
            'price' => $price
        ]);

        return redirect('/')->with('successAdd', 'Product successfully added!');
    }

    public function updateProduct(Request $request){
        $name = $request->name;
        $detail = $request->detail;
        $price = $request->price;
        $image = $request->file('image');
        $this->validate($request, [
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'image' => 'mimes:jpeg,png,jpg'

        ]);

        if($image!=null){
            Storage::putFileAs('/public/Image', $image, $image->getClientOriginalName());
            DB::table('products')->where('id',$request->route('id'))->update([
                'name' => $name,
                'image' => $image->getClientOriginalName(),
                'detail' => $detail,
                'price' => $price
            ]);
        }else{
            DB::table('products')->where('id',$request->route('id'))->update([
                'name' => $name,
                'detail' => $detail,
                'price' => $price
            ]);
        }

        return redirect('/')->with('successUpdate', 'Product successfully updated!');
    }

    public function deleteProduct(Request $request){
        DB::table('products')->where('id', $request->route('id'))->delete();
        return redirect('/')->with('successDelete', 'Product successfully deleted!');
    }
    
    public function ProductDetail(product $products){
        return view('productDetail')->with('products', $products);
    }

}
