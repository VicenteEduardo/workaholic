<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Agente;
use Illuminate\Http\Request;

class Agentetroller extends Controller
{
    public function index()
    {
        $response['agentes'] = Agente::get();
        return view('site.agente.index', $response);
    }
}
