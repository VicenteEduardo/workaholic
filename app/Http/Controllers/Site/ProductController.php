<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Venda;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //
        $response['products'] = Product::paginate(6);
        $response['lasted'] = Product::paginate(6);
        return view('site.product.all.index', $response);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $title
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        //
        try {
            $response['produt'] = Product::where('name', urldecode($title))->first();
            $response['lasted'] = Product::where('name', '!=', urldecode($title))->orderBy('id', 'desc')->limit(5)->get();
            return view('site.product.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.services');
        }
    }


    public function cart()
    {
        return view('cart');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" =>"storage/". $product->photo
            ];
        }



        session()->put('cart', $cart);
        return redirect()->route('site.home');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
}
