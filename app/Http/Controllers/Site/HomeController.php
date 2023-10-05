<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agente;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Partner;
use App\Models\Service;
use App\Models\SlideShow;

class HomeController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $response['slideshows'] = SlideShow::orderBy('id', 'desc')->limit(5)->get();
        $response['news'] = News::where([['state', 'Autorizada']])->orderBy('id', 'desc')->limit(6)->get();
        $response['galleries'] = Gallery::orderBy('id', 'desc')->limit(4)->get();
        $response['services'] = Service::get();

        $response['agentes'] = Agente::get();


        $response['services'] = Service::get();
        return view('site.home.index', $response);
    }
}
