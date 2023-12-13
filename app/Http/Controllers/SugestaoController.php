<?php

namespace App\Http\Controllers;

use App\Models\Sugestao;
use Illuminate\Http\Request;
use App\Http\Requests\SugestaoRequest;

class SugestaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sugestoes = Sugestao::all();
        return view('_admin.sugestoes.index', compact('sugestoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sugestao = new Sugestao;
        return view('_admin.sugestoes.create', compact('sugestao'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SugestaoRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Sugestao $sugestao)
    {
        if($sugestao) {
            return view('_admin.sugestoes.show', compact('sugestao'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sugestao $sugestao)
    {
        return view('_admin.sugestoes.edit', compact('sugestao'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SugestaoRequest $request, Sugestao $sugestao)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sugestao $sugestao)
    {

    }
}
