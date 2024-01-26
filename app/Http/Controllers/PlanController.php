<?php

namespace App\Http\Controllers;

use App\Models\PlanTable;
use App\Models\Member_Doner;
use App\Models\PlanType;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plans = PlanTable::all();
        return view('_admin.plans.index', compact('plans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plans = PlanTable::all();
        $planTypes = PlanType::all();
        return view('_admin.plans.create', compact('plans', 'planTypes'));
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
    public function show(string $id)
    {
        $plans = PlanTable::all();
        return view('_admin.plans.show', compact('plans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $plan = PlanTable::findOrFail($id);
        $plantypes = PlanType::all();
        return view('_admin.plans.edit', compact('plan', 'plantypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $plans = PlanTable::findOrFail($id);
        $validatedData = $request->validate([
            'planType_id' => 'required|exists:plantypes,id',
        ]);

        // Atualização dos dados
        $plans->planType_id = $validatedData['planType_id'];
        $plans->save();

        return redirect()->route('admin.plans.index')->with('success', 'Tipo de plano atualizado com sucesso.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plans = PlanTable::findOrFail($id);
        $plans->delete();

        return redirect()->route('admin.plans.index');
    }
}
