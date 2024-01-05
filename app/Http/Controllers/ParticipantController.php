<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Http\Requests\ParticipantRequest;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $participant = Participant::all();
        return view ('_admin.participants.index', compact('participant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function destroy(Participant $participant)
    {
        //
    }
}
