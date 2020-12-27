<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        return view('cart.index', compact('carts'));
    }

    public function store(Request $request)
    {
        $duplicate = Cart::where('product_id', $request->product_id)->first();

        if ($duplicate ){
            return redirect(route('cart'))->with('error', 'Item barang sudah ada di Cart');
        }

        Cart::create([
            'user_id' => Auth::user()->id,
            'product_id' => $request->product_id,
            'qty' => 1
        ]);

        return redirect(route('cart'))->with('success', 'Item barang berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        Cart::where('id', $id)->update([
            'qty' => $request->quantity
        ]);
        return response()->json([
            'success' => true
        ]);
    }

    public function delete($id)
    {
        Cart::findOrFail($id)->delete();
        return redirect()->back();
    }

}
