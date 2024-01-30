<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Participant;
use App\Models\Member_Doner;
use Illuminate\Http\Request;
use App\Http\Requests\ParticipantRequest;


class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Event $event)
    {
        $participantsevent = $event->name;
        $participant = Participant::where('event_id', $event->id)->get();
        return view ('_admin.participants.index', compact('participant','participantsevent','event'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event)
    {
        $users = User::where('tipo', '!=', 'A')->get();
        $members = Member_Doner::all();
        $newparticipant = New Participant();
        return view('_admin.participants.create',compact('event','newparticipant','members','users'));
    }

    public function store(ParticipantRequest $request, $event)
    {
        $fields = $request->validated();
        $newparticipant = new Participant();
        $newparticipant->fill($fields);
        $newparticipant->save();

        return redirect()->route('admin.participantes.index', ['event' => $event])
            ->with('success', 'Participante adicionado com sucesso');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function registarEvento(Request $request, Event $event)
    {

        $participant=Participant::where('member_doner_id',auth()->user()->id)->where('event_id',$event->id)->first();

        if ($participant){
            return redirect()->back()
            ->withErrors(['Já está registado evento']);
        }

        $participant = new Participant();
        $participant->member_doner_id=auth()->user()->id;
        $participant->event_id=$event->id;
        $participant->obs=$request->obs;
        $participant->save();

         return redirect()->back()
           ->with('success', 'Registado com sucesso no evento');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, Participant $participants)
    {
        $participants->delete();

        return redirect()->back()->with('success',
        'Participante removido com sucesso');
    }

    public function cancelarreg(Participant $participant)
    {
        $participant->delete();

        return redirect()->back()->with('success',
        'Registo cancelado com sucesso.');
    }
    public function deleteregperfil(Participant $participant)
    {
        $participant->delete();

        return redirect()->back()->with('success',
        'Participante removido com sucesso');
    }

}
