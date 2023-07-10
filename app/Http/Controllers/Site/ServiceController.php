<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['services'] = Service::paginate(6);
        $response['lasted'] = Service::paginate(6);
        return view('site.services.all.index', $response);
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
            $response['service'] = Service::where('name', urldecode($title))->first();
            $response['lasted'] = Service::where( 'name', '!=', urldecode($title))->orderBy('id', 'desc')->limit(5)->get();
            return view('site.services.single.index', $response);
        } catch (\Throwable $th) {
            return redirect()->route('site.services');
        }
    }
}
