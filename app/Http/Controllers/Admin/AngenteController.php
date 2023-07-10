<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Agente;
use Illuminate\Http\Request;

class AngenteController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {


        $response['agentes'] = Agente::get();
        //Logger
        $this->Logger->log('info', 'Listou as notícia ');
        return view('admin.agentes.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Criar notícia ');
        return view('admin.agentes.create.index');
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
            'name' => 'required|min:5|max:255',
            'specification' => 'required|min:2|max:255',
            'foto' => 'required|mimes:jpg,png,jpeg',
        ]);

        $file = $request->file('foto')->store('Agentes');


        $Agente = Agente::create([
            'foto' => $file,
            'name' => $request->name,
            'specification' => $request->specification,
        ]);
        //Logger

        $this->Logger->log('info', 'Cadastrou um agente  com o nome ' . $Agente->name);
        return redirect("admin/agentes/show/$Agente->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['agentes'] = Agente::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar uma notícia  com o identificador ' . $id);
        return view('admin.agentes.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['agentes'] = Agente::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma notícia  com o identificador ' . $id);
        return view('admin.agentes.edit.index', $response);
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
            'specification' => 'required|min:2|max:255',
            'foto' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('foto')) {
            $file = $file->store('agentes');
        } else {
            $file = Agente::find($id)->foto;
        }



        Agente::find($id)->update([
            'foto' => $file,
            'name' => $request->name,
            'specification' => $request->specification,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou uma notícia  com o identificador ' . $id);
        return redirect("admin/agentes/show/$id")->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou uma notícia  com o identificador ' . $id);
        Agente::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
