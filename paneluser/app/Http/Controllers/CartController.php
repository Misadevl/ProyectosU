<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;


class CartController extends Controller
{

    public function add(Request $request)
    {

        $product = Product::find($request->product_id);

        Cart::add(
            $product->id,
            $product->nombre,
            $product->precio,
            1,
            array("urlfoto" => $product->urlfoto)

        );
        return back()->with('success', "$product->nombre ¡se ha agregado con éxito al carrito!");
    }

    public function cart()
    {

        return view('checkout');
    }

    public function removeitem(Request $request)
    {
        //$producto = Producto::where('id', $request->id)->firstOrFail();
        Cart::remove([
            'id' => $request->id,
        ]);
        return back()->with('success', "Producto eliminado con éxito de su carrito.");
    }

    public function clear()
    {
        Cart::clear();
        return back()->with('success', "The shopping cart has successfully beed added to the shopping cart!");
    }
}
