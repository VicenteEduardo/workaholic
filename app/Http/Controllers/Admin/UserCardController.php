<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\UserCard;
use Illuminate\Http\Request;

class UserCardController extends Controller
{
     
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $response['userCard'] = UserCard::first();
         //Logger
         $this->Logger->log('info', 'Visualizou Cartão de Utilizador');
         return view('admin.service.userCard.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //
         $response['userCard'] = UserCard::find($id);
         //Logger
         $this->Logger->log('info', 'Entrou em editar Cartão de Utilizador');
         return view('admin.service.userCard.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required|min:6|max:255',
            'description' => 'required|min:20|'
        ]);


        $definition = UserCard::find($id)->update([
            'title' => $request->title,
            'description' => $request->description

        ]);
        //Logger
        $this->Logger->log('info', 'Editou Cartão de Utilizador');
        return redirect()->back()->with('edit', '1');
    }

   
}
