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
        // Obtém todas as fotografias associadas ao projeto
        $fotografias = $projeto->fotografias;

        // Retorna a view com as fotografias e o projeto
        return view('_admin.fotografiaprojeto.index', compact('projeto', 'fotografias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Projeto $projeto)
    {
        // Obtém todas as fotografias associadas ao projeto
        $fotografias = $projeto->fotografias;

        // Retorna a view para criar uma nova fotografia com as fotografias e o projeto
        return view('_admin.fotografiaprojeto.create', compact('projeto', 'fotografias'));
    }

    public function fotografiasprojeto()
    {
        // Obtém todas as fotografias do modelo FotografiaProjeto
        $fotografias = FotografiaProjeto::all();

        // Retorna a view 'galeria' com as fotografias
        return view('galeria', compact('fotografias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FotografiaProjetoRequest $request, Projeto $projeto)
    {

        // Verifica se existe um ficheiro de imagem no pedido
        if ($request->hasFile('fotografia')) {

            // Obtém a imagem do pedido
            $imagem = $request->file('fotografia');

            // Armazena a imagem na pasta 'project_photos' no disco 'public'
            $path = $imagem->store('project_photos', 'public');

            // Cria uma nova instância de FotografiaProjeto
            $foto = new FotografiaProjeto;

            // Define o nome do ficheiro da imagem na instância
            $foto->foto = basename($path);

            // Define o destaque como 0 (não é destaque)
            $foto->destaque = 0;

            // Guarda a fotografia associada ao projeto
            $projeto->fotografias()->save($foto);
        }

        // Redireciona para a página de índice com uma mensagem de sucesso
        return redirect()->route('admin.fotografiasprojeto.index', $projeto)->with('success', 'Fotografia adicionada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projeto $projeto, FotografiaProjeto $fotografiaProjeto)
    {
        // Retorna a vista para mostrar detalhes de uma fotografia com o projeto e a fotografia
        return view('_admin.fotografiaprojeto.show', compact('projeto', 'fotografiaProjeto'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projeto $projeto, FotografiaProjeto $fotografiaProjeto)
    {
        // Remove a imagem da pasta 'project_photos' no disco 'public'
        Storage::disk('public')->delete('project_photos/' . $fotografiaProjeto->foto);

        // Remove a fotografia da base de dados
        $fotografiaProjeto->delete();

        // Redireciona para a página de índice com uma mensagem de sucesso
        return redirect()
            ->route('admin.fotografiasprojeto.index', $projeto)
            ->with('success', 'Fotografia eliminada com sucesso');
    }
}
