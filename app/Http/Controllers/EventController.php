<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\PartnerShip;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use App\Models\PhotoEvent;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $photos_events = PhotoEvent::all();
        $events = Event::all();
        return view('_admin.evento.index', compact('events','photos_events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event = new Event;
        $partnerships = PartnerShip::all();
        return view('_admin.evento.create', compact('event', 'partnerships'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $fields = $request->validated();

        $event = new Event();
        $event->fill($fields);
        $event->save();
        $event->partnerships()->attach($request->partnerships);

        return redirect()->route('admin.eventos.index')
            ->with('success', 'Evento criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        if($event) {
            return view('_admin.evento.show', compact('event'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        $partnerships = PartnerShip::all();
        return view('_admin.evento.edit', compact('event','partnerships'));

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {

        $fields = $request->validated();

        $event->fill($fields);

        $event->partnerships()->detach();
        if ($request->partnerships){
            $event->partnerships()->attach($request->partnerships);
        }

        $event->save();

        return redirect()->route('admin.eventos.index')
            ->with('success', 'Evento atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        if (count($event->partnerships)){
            return redirect()->route('admin.eventos.index')->withErrors(['delete'=>'O evento que pretende apagar tem parceiros associados'] );
        }else if(count($event->participants)){
            return redirect()->route('admin.eventos.index')->withErrors(['delete'=>'O evento que pretende apagar tem participantes associados'] );
        }
        $event->delete();
        return redirect()->route('admin.eventos.index')->with('success',
        'Evento eliminado com sucesso');
    }
}
