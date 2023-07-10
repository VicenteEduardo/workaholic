<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CommonQuestion;
use App\Models\Cpf;

class ContactController extends Controller
{

    public function index()
    {


        return view('site.contact.index');
    }
}
