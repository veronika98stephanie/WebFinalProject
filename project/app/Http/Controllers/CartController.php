<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function __construct(Cart $cart){
        $this->cart = $cart;
    }

    public function addCart(Request $request){
        $newCart = [
            'clientId' => $request->clientId,
            'itemId' => $request->itemId,
            'qty' => $request->qty,
        ];

        $newCart = $this->cart->create($newCart);

        if($newCart != null){
            var_dump($newCart);
        }else{
            echo "fail";
        }
    }

    public function deleteCart(Request $request){
        $deteleCart = Cart::where('clientId', $request->clientId)->orWhere('id', $request->id)->delete();
    }
}
