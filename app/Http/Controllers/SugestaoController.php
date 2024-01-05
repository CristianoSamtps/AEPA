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
     * Display the specified resource.
     */
    public function show(Sugestao $sugestao)
    {
        if($sugestao) {
            return view('_admin.sugestoes.show', compact('sugestao'));
        }
    }

    public function registarSugestao(Request $request)
    {
        $fields=$request->validate(['suges'=>'required']);
        $sugestao = new Sugestao();
        $sugestao->member_doner_id=auth()->user()->id;
        $sugestao->sugestao=$request->suges;
        $sugestao->listado='NL';
        $sugestao->aprovacao='N';
        $sugestao->votos=0;
        $sugestao->save();

         return redirect()->back()
           ->with('success', 'Sugestão registada com sucesso');
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
        $fields = $request->validated();

        $sugestao->fill($fields);
        $sugestao->save();

        return redirect()->route('admin.sugestoes.index')
            ->with('success', 'Sugestão atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sugestao $sugestao)
    {
        $sugestao->delete();
        return redirect()->route('admin.sugestoes.index')->with('success',
        'Sugestão eliminada com sucesso');
    }
}
