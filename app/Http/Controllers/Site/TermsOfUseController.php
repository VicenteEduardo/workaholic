<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class TermsOfUseController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.termsOfUse.index');
    }
}
