<?php

namespace App\Http\Controllers;

use App\Models\PartnerShip;
use App\Http\Requests\PartnerShipRequest;
use Illuminate\Http\Request;

class PartnerShipController extends Controller
{

    public function index(Request $request)
    {
        $partners = [];

        if (count($request->all()) > 0) {
            $partnersQuery = PartnerShip::query();

            if ($request->filled('id')) {
                $partnersQuery->where('id', $request->id);
            }
            if ($request->filled('name')) {
                $partnersQuery->where('name', 'like', '%' . $request->name . '%');
            }
            if ($request->filled('descricao')) {
                $partnersQuery->where('descricao', $request->descricao);
            }

            $partners = $partnersQuery->get();
        } else {
            $partners = PartnerShip::all();
        }

        return view('_admin.patrocinadores.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partner = new PartnerShip();
        return view('_admin.patrocinadores.create', compact("partner"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerShipRequest $request)
    {
        $validatedData = $request->validated();

        $partner = PartnerShip::create($validatedData);

        if ($request->hasFile('foto')) {
            $foto_path = $request->file('foto')->storeAs(
                'public/partner_fotos'
            );

            $partner->save();
        }

        return redirect()->route('admin.patrocinadores.show', $partner)
            ->with('success', 'Parceiro criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $partner = PartnerShip::find($id);

        return view('_admin.patrocinadores.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PartnerShip $partner)
    {
        return view('_admin.patrocinadores.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerShipRequest $request, PartnerShip $partner)
    {
        $fields = $request->validated();
        $partner->fill($fields);


        $partner->save();

        return redirect()->route('admin.patrocinadores.index')
            ->with('success', 'Patrocinador atualizado com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PartnerShip $partner)
    {
        $partner->delete();

        return redirect()->route('admin.patrocinadores.index')->with(
            'success',
            'Patrocinador eliminado com sucesso'
        );
    }
}
