<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function list()
    {

        
       
        $response['registeredEvents'] = Event::get()->count();
        $response['event'] = Event::get();
        //Logger
        $this->Logger->log('info', 'Listou os Eventos');
        return view('admin.event.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Criar Evento');
        return view('admin.event.create.index');
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
            'title' => 'required|min:5|max:255|unique:event',
            'startTime' => 'required|min:2|max:255',
            'body' => 'required||min:5',
            'image' => 'required|mimes:jpg,png,jpeg',
            'endTime' => 'required',
            'dateEvent' => 'required',
            'localization' => 'required|min:5',

        ]);
        $file = $request->file('image')->store('events');

        if (Auth::user()->level == 'Analista') {
            $stateless = 'Não Autorizada';
        } else {
            $stateless = $request->state;
        }

        $event = Event::create([
            'path' => $file,
            'title' => $request->title,
            'startTime' => $request->startTime,
            'body' => $request->body,
            'endTime' => $request->endTime,
            'localization' => $request->localization,
            'state' => $stateless,
            'dateEvent' => $request->dateEvent,
        ]);

        //Logger
        $this->Logger->log('info', 'Cadastrou um Evento com o titulo ' . $event->title);
        return redirect("admin/event/show/$event->id")->with('create', '1');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Logger
        $this->Logger->log('info', 'Visualizou um Evento com o identificador ' . $id);
        $response['event'] = Event::find($id);
        return view('admin.event.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //Logger
        $this->Logger->log('info', 'Entrou em Editar um Evento com o identificador ' . $id);
        $response['event'] = Event::find($id);
        return view('admin.event.edit.index', $response);
    }

    /**
     * UpendTime the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validation = $request->validate([
            'title' => 'required|min:5|max:255',
            'startTime' => 'required|min:2|max:255',
            'body' => 'required||min:5',
            'endTime' => 'required',
            'dateEvent' => 'required',
            'image' => 'mimes:jpg,png,jpeg',
        ]);


        if ($file = $request->file('image')) {
            $file = $file->store('events');
        } else {
            $file = Event::find($id)->path;
        }

        if (Auth::user()->level == 'Analista') {
            $request->state = Event::find($id)->state;
        }

        Event::find($id)->update([
            'path' => $file,
            'title' => $request->title,
            'startTime' => $request->startTime,
            'body' => $request->body,
            'endTime' => $request->endTime,
            'localization' => $request->localization,
            'dateEvent' => $request->dateEvent,
            'state' => $request->state
        ]);

        //Logger
        $this->Logger->log('info', 'Editou um Evento com o identificador ' . $id);
        return redirect()->route('admin.event.index')->with('edit', '1');
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
        $this->Logger->log('info', 'Eliminou um Evento com o identificador ' . $id);

        Event::find($id)->delete();
        return redirect()->back()->with('destroy', '1');
    }
}
