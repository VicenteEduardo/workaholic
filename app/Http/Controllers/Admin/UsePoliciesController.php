<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\UsePolicie;
use Illuminate\Http\Request;

class UsePoliciesController extends Controller
{


    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $response['service'] = UsePolicie::first();
         //Logger
         $this->Logger->log('info', 'Visualizou Políticas de Utilização');
         return view('admin.mediateca.usePolicies.details.index', $response);
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
         $response['service'] = UsePolicie::find($id);
         //Logger
         $this->Logger->log('info', 'Entrou em editar Políticas de Utilização');
         return view('admin.mediateca.usePolicies.edit.index', $response);
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


        $definition = UsePolicie::find($id)->update([
            'title' => $request->title,
            'description' => $request->description

        ]);
        //Logger
        $this->Logger->log('info', 'Editou Políticas de Utilização');
        return redirect()->back()->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
