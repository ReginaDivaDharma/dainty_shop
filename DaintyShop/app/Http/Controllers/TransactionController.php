<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\product;
use App\Models\User;
use App\Models\transaction;
use App\Models\transactionDetail;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    //
    public function showTransaction(Request $request){
        $users = DB::table('users')->where('id', $request->route('id'))->first();
        $transaction = transaction::all();
        $transactionDetail = DB::table('transaction_details')
                        ->join('products','products.id', '=','transaction_details.product_id')
                        ->join('transactions','transactions.id', '=','transaction_details.transaction_id')
                        ->get();

        return view('transaction')->with('users', $users)->with('transactionDetail', $transactionDetail)->with('transaction', $transaction);
    }

    public function purchase(Request $request){
        $carts = DB::table('carts')->where('user_id', $request->route('id'))->get();

        $transactions = new transaction();
        $transactions->user_id = Auth::User()->id;
        $transactions->save();

        foreach ($carts as $c) {
            DB::table('transaction_details')->insert([
                'transaction_id' => $transactions->id,
                'product_id' => $c->product_id,
                'quantity' => $c->quantity
            ]);
        }

        DB::table('carts')->where('user_id', $request->route('id'))->delete();
        return redirect('/')->with('successPurchase', 'Product successfully purchased!');
    }

}
