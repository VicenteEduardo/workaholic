<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['galleries'] = Gallery::orderBy('id', 'desc')->paginate(6);
        return view('site.gallery.image.all.index', $response);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $title
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        //
        try {
            $response['gallery'] = Gallery::with('images')->where([['name', urldecode($name)]])->first();
            return view('site.gallery.image.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.gallery');
        }
    }
}
