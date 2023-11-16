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

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => "storage/" . $product->photo
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                return response()->json(['success' => true, 'message' => 'Cart updated successfully']);
            } else {
                return response()->json(['success' => false, 'message' => 'Product not found in the cart']);
            }
        }

        return response()->json(['success' => false, 'message' => 'Invalid request']);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request, $id)
    {

        if ($id) {
            $cart = session()->get('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return  redirect()->route('cart')->with('delete', '1');
        }
    }

    public function finish(Request $request)
    {
        $cart = session()->get('cart');
        foreach ($cart as $item) {

            Venda::create([

                "name" => $item['name'],
                "quantity" => $item['quantity'],
                "price" => $item['price'],
                "image" => "storage/" . $item['image']
            ]);
        }
    }
}
