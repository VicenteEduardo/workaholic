<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\UsePolicie;
use Illuminate\Http\Request;

class UsePoliciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['service'] = UsePolicie::get();
        return view('site.mediateca.usePolicie.index', $response);
    }

    
}
