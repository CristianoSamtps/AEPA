<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\PhotoEvent;
use App\Models\PartnerShip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PhotoEventRequest;

class PhotoEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Event $event)
    {
        $photos = $event->photos;

        return view('_admin.fotografiasEvento.index', compact('event','photos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Event $event)
    {
        $photo = new PhotoEvent;
        return view('_admin.fotografiasEvento.create', compact('event','photo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PhotoEventRequest $request, Event $event)
    {
        $fields = $request->validated();

        $photo = new PhotoEvent();
        $photo->fill($fields);

        if ($request->hasFile('fotografia')) {
            $foto_path = $request->file('fotografia')->store(
                'public/event_photos'
            );
            $photo->fotografia = basename($foto_path);
        }
        $photo->event_id=$event->id;
        $photo->save();

        return redirect()->route('admin.fotografias.index',$event)
            ->with('success', 'Foto criada com sucesso');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event, PhotoEvent $photo)
    {
        return view('_admin.fotografiasEvento.edit', compact('event','photo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PhotoEventRequest $request,Event $event, PhotoEvent $photo)
    {
        $fields = $request->validated();

        $photo->fill($fields);

        if ($request->hasFile('fotografia')) {
            if (!empty($photo->fotografia)) {
                Storage::disk('public')->delete('event_photos/' .
                $photo->fotografia );
            }
            $foto_path = $request->file('fotografia')->store(
                'public/event_photos'
            );
            $photo->fotografia = basename($foto_path);
        }

        $photo->save();

        return redirect()->route('admin.fotografias.index',$event)
            ->with('success', 'Foto atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event, PhotoEvent $photo)
    {
        Storage::disk('public')->delete('event_photos/' .
        $photo->fotografia );
        $photo->delete();
        return redirect()->route('admin.fotografias.index',$event)->with(
            'success',
            'Foto eliminada com sucesso'
        );
    }
}
