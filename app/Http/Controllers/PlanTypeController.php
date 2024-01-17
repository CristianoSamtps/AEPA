<?php

namespace App\Http\Controllers;

use App\Models\PlanType;
use Illuminate\Http\Request;

class PlanTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plantypes = PlanType::all();
        return view('_admin.plantypes.index', compact('plantypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('_admin.plantypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'duracao' => 'required|numeric',
            'valor' => 'required|numeric',
        ]);

        $planType = PlanType::create($validatedData);

        return redirect()->route('admin.plantypes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $planType = PlanType::findOrFail($id);
        return view('_admin.plantypes.show', compact('planType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $planType = PlanType::findOrFail($id);
        return view('_admin.plantypes.edit', compact('planType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $planType = PlanType::findOrFail($id);

        // Validação dos dados
        $validated = $request->validate([
            'name' => 'required|string',
            'duracao' => 'required|numeric',
            'valor' => 'required|numeric',
        ]);

        // Atualização dos dados
        $planType->update($validated);

        // Redirecionamento
        return redirect()->route('admin.plantypes.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $planType = PlanType::findOrFail($id);
        $planType->delete();

        return redirect()->route('admin.plantypes.index');
    }

}
