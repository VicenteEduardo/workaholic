<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;


class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {
        $response['galleries'] = Gallery::orderBy('id', 'desc')->get();
        //Logger
        $this->Logger->log('info', 'Listou as Galerias');
        return view('admin.gallery.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Criar Galeria');
        return view('admin.gallery.create.index');
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
            'name' => 'required|min:5|max:255|unique:gallery',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);


        $file = $request->file('image')->store('Gallery');
        $gallery = Gallery::create([
            'cover' => $file,
            'name' => $request->name
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou uma Galeria com o nome ' . $gallery->name);
        return redirect("admin/gallery/show/$gallery->id")->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response['gallery'] = Gallery::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Galeria com o identificador ' . $id);
        return view('admin.gallery.details.index', $response);
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
        $response['gallery'] = Gallery::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Galeria com o identificador ' . $id);
        return view('admin.gallery.edit.index', $response);
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
            'image' => 'mimes:jpg,png,jpeg',
        ]);

        if ($file = $request->file('image')) {
            $file = $file->store('Gallery');
        } else {
            $file = Gallery::find($id)->cover;
        }

        Gallery::find($id)->update([
            'cover' => $file,
            'name' => $request->name
        ]);
        //Logger
        $this->Logger->log('info', 'Editou  uma Galeria com o identificador ' . $id);
        return redirect("admin/gallery/show/$id")->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou uma Galeria com o identificador ' . $id);
        Gallery::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
