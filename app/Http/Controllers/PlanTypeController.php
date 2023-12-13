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
        $planType = PlanType::all();
        return view('_admin.plantypes.create', compact('planType'));
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
    public function show(PlanType $planType)
    {

        return view('_admin.plantypes.show', compact('planType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlanType $planType)
    {

        return view('_admin.plantypes.edit', compact('planType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlanType $planType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlanType $planType)
    {
        //
    }
}
