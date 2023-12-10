<?php

namespace App\Http\Controllers;

use App\Models\PhotoEvent;
use App\Models\Event;
use App\Models\PartnerShip;
use Illuminate\Http\Request;

class PhotoEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event = Event::all();
        $photos_events = new PhotoEvent;
        return view('_admin.fotografiasEvento.create', compact('event','photos_events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PhotoEvent $photoEvent)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhotoEvent $photoEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhotoEvent $photoEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhotoEvent $photoEvent)
    {
        //
    }
}
