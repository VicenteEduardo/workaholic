<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
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
            $response['lasted'] = Product::where( 'name', '!=', urldecode($title))->orderBy('id', 'desc')->limit(5)->get();
            return view('site.product.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.services');
        }
    }
}
