<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agente;
use App\Models\Service;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['services'] = Service::orderBy('id', 'desc')->paginate(3);
        $response['agentes'] = Agente::get();
        $response['agentesCount'] = Agente::count();
        return view('site.about.index',$response);
    }
}
