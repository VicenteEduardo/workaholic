<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Newspaper;
use Illuminate\Http\Request;

class NewsPaperController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function list()
    {
        //
        $response['newspaper'] = Newspaper::get();

        //Logger
        $this->Logger->log('info', 'Listou Noticias em Jornal de Angola');
        return view('admin.service.Newspaper.list.index', $response);
    }

    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar  Noticias  em Jornal de Angola');
        return view('admin.service.Newspaper.create.index');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|min:6|max:255',
            'link' => 'max:255'
        ]);
        $newsPaper = Newspaper::create([
            'title' => $request->title,
            'link' => $request->link
        ]);
        //Logger
        $this->Logger->log('info', 'Cadastrou uma Noticia em Jornal de Angola');
        return redirect("admin/mediateca/Jornal-de-Angola/show/$newsPaper->id")->with('create', '1');
    }


    public function edit($id)
    {
        $response['newspaper'] = Newspaper::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar Jornal de Angola');
        return view('admin.service.Newspaper.edit.index', $response);
    }



    public function show($id)
    {
        //
        $response['newspaper'] = Newspaper::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Noticia em Jornal de Angola com o identificador ' . $id);
        return view('admin.service.Newspaper.details.index', $response);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'title' => 'required|min:6|max:255',
            'link' => 'max:255'
        ]);

        $definition = Newspaper::find($id)->update([
            'title' => $request->title,
            'file' => $request->link

        ]);
        //Logger
        $this->Logger->log('info', 'Editou Jornal de Angola');
        return redirect()->route('admin.newsPaper.show')->with('edit', '1');
    }

    public function destroy($id)
    {
           //Logger
        $this->Logger->log('info', 'Eliminou um item em Jornal de Angola com o identificador' . $id);
        Newspaper::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
