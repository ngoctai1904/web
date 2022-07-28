<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Cart;
use Illuminate\Http\Request;
use DB;
use App\Models\Book;

class CartController extends Controller
{

    public function list()
    {
        $products = Cart::content();
        return view('cart', compact('products'));
    }
    public function push($id)
    {
        $book = Book::find($id);
        Cart::add($id, $book->name, 1, $book->discount ? $book->discount : $book->price, 0, ['thumbnail' => $book->thumbnail]);
        return back();
    }
    public function delete($rowID)
    {

    }
    
    public function cart()
    {
        // return view('cart');
    }

    public function addToCart($id)
    {
        // $product = Product::findOrFail($id);
        // $cart = session()->get('cart', []);
        // if(isset($cart[$id])) {
        //     $cart[$id]['quantity']++;
        // } else {
        //     $cart[$id] = [
        //         "name" => $product->name,
        //         "quantity" => 1,
        //         "price" => $product->price,
        //         "image" => $product->image
        //     ];
        // }
        // session()->put('cart', $cart);
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        // if($request->id && $request->quantity){
        //     $cart = session()->get('cart');
        //     $cart[$request->id]["quantity"] = $request->quantity;
        //     session()->put('cart', $cart);
        //     session()->flash('success', 'Cart updated successfully');
        // }
    }

    public function remove(Request $request)
    {
        // if($request->id) {
        //     $cart = session()->get('cart');
        //     if(isset($cart[$request->id])) {
        //         unset($cart[$request->id]);
        //         session()->put('cart', $cart);
        //     }
        //     session()->flash('success', 'Product removed successfully');
        // }
    }
}
