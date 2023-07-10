<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {


        $response['services'] = Product::get();
        //Logger
        $this->Logger->log('info', 'Listou os Produtos ');
        return view('admin.products.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Criar Produto ');
        return view('admin.products.create.index');
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
            'description' => 'required|min:5',
            'price' => 'required|numeric',
            'photo' => 'required|mimes:jpg,png,jpeg',
        ]);

        $file = $request->file('photo')->store('produtos');


        $Agente = Product::create([
            'photo' => $file,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        //Logger

        $this->Logger->log('info', 'Cadastrou um Produto  com o nome ' . $Agente->name);
        return redirect("admin/produtos/show/$Agente->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['service'] = Product::find($id);

        //Logger
        $this->Logger->log('info', 'Visualizar um  Produto  com o identificador ' . $id);
        return view('admin.products.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $response['service'] = Product::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um Produto  com o identificador ' . $id);
        return view('admin.products.edit.index', $response);
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
            'description' => 'required|min:5',
            'price' => 'required|numeric',
            'photo' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('foto')) {
            $file = $file->store('produtos');
        } else {
            $file = Product::find($id)->photo;
        }



        Product::find($id)->update([
            'photo' => $file,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        //Logger
        $this->Logger->log('info', 'Editou um Produto  com o identificador ' . $id);
        return redirect("admin/produtos/show/$id")->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou um Produto  com o identificador ' . $id);
        Product::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
