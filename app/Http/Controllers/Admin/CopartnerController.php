<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Copartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CopartnerController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {


        $response['copartner'] = Copartner::get()->count();
        $response['copartners'] = Copartner::get();
        //Logger
        $this->Logger->log('info', 'Listou as Parceiros ');
        return view('admin.copartner.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Criar Parceiros ');
        return view('admin.copartner.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validation = $request->validate([
            'name' => 'required|min:5|max:255|unique:copartners',

            'photo' => 'required|mimes:jpg,png,jpeg',
        ]);
        $file = $request->file('photo')->store('copartners');



        $copartner = Copartner::create([
            'photo' => $file,
            'name' => $request->name,
            'body' => $request->body,

        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou uma Parceiros  com o titulo ' . $copartner->name);

        return redirect("admin/parceiros/show/$copartner->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['copartner'] = Copartner::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar uma Parceiros  com o identificador ' . $id);
        return view('admin.copartner.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['copartner'] = Copartner::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Parceiros  com o identificador ' . $id);
        return view('admin.copartner.edit.index', $response);
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
            'name' => 'required|min:5|max:255',
     
            'photo' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('photo')) {
            $file = $file->store('copartners');
        } else {
            $file = Copartner::find($id)->photo;
        }


        Copartner::find($id)->update([
            'photo' => $file,
            'name' => $request->name,
            'body' => $request->body,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma Parceiros  com o identificador ' . $id);
        return redirect("admin/parceiros/show/$id")->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Logger
        $this->Logger->log('info', 'Eliminou uma Parceiros  com o identificador ' . $id);
        Copartner::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
