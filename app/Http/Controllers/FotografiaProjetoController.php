<?php

namespace App\Http\Controllers;

use App\Models\FotografiaProjeto;
use App\Models\Projeto;
use Illuminate\Http\Request;
use App\Http\Requests\FotografiaProjetoRequest;
use Illuminate\Support\Facades\Storage;

class FotografiaProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Projeto $projeto)
    {
        $fotografias = $projeto->fotografias;
        return view('_admin.fotografiaprojeto.index', compact('projeto', 'fotografias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Projeto $projeto)
    {
        $fotografias = $projeto->fotografias;
        return view('_admin.fotografiaprojeto.create', compact('projeto', 'fotografias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FotografiaProjetoRequest $request, Projeto $projeto)
    {

        if ($request->hasFile('fotografia')) {
            $imagem = $request->file('fotografia');
            $path = $imagem->store('project_photos', 'public');

            $foto = new FotografiaProjeto;

            $foto->foto = basename($path);
            $foto->destaque = $request->input('destaque', 'não');

            $projeto->fotografias()->save($foto);
        }

        return redirect()->route('admin.fotografias.index', $projeto)->with('success', 'Fotografia adicionada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projeto $projeto, FotografiaProjeto $fotografiaProjeto)
    {
        return view('_admin.fotografiaprojeto.show', compact('projeto', 'fotografiaProjeto'));
    }

    public function destroy(FotografiaProjeto $fotografiaProjeto)
    {
        $fotografiaProjeto->delete();

        return redirect()
            ->route('admin.fotografias.index')
            ->with('success', 'Fotografia eliminado com sucesso');
    }
}
