<?php

namespace App\Http\Controllers\Site\Email;

use App\Http\Controllers\Controller;
use App\Mail\Contact as MailContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HelpController extends Controller
{
    /**
     * Show the form for sending a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'msg' => 'required|string',
            'type' => 'required|string',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5' 
        ]);

  
        if($request->type == 'Fale Connosco'){
            Mail::to('comunicacao@mediatecas.gov.ao')->send( new MailContact($request->all()));
        }else{   
            Mail::to('reclamacoesesugestoes@mediatecas.gov.ao')->send( new MailContact($request->all()));
        }
      
        return redirect()
            ->back()
            ->with('helpCreate', '1');
    }
}
