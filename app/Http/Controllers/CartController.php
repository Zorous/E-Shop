<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart($id){
        $product = Article::findOrFail($id);
        // return $product;

        $cart = session()->get('cart',[]);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }
        else{
            $cart[$id] = [
                "products_name" => $product->product_name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }

session()->put('cart',$cart);
return redirect()->back()->with('success','Product added to cart on successfully');

    }
}
