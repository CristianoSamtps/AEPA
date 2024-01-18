<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Models\FotografiaProjeto;
use App\Models\PartnerShip;
use Illuminate\Http\Request;
use App\Http\Requests\ProjetoRequest;
use App\Models\Donation;
use App\Models\Voluntariado;
use Illuminate\Support\Facades\Auth;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotografias_projetos = FotografiaProjeto::all();
        $projetos = Projeto::all();
        return view('_admin.projeto.index', compact('projetos', 'fotografias_projetos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projeto = new Projeto;
        $partnerships = PartnerShip::all();

        return view('_admin.projeto.create', compact('projeto', 'partnerships'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjetoRequest $request)
    {
        $fields = $request->validated();

        $projetos = new Projeto();
        $projetos->fill($fields);

        $projetos->estado = $request->input('estado');
        $projetos->voluntariado = $request->input('voluntariado', 0);

        $projetos->save();

        if ($request->has('partnerships')) {
            foreach ($request->input('partnerships') as $partnershipId) {
                $projetos->partnerships()->attach($partnershipId);
            }
        }

        return redirect()
            ->route('admin.projeto.index')
            ->with('success', 'Projeto criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projeto $projeto)
    {
        return view('_admin.projeto.show', compact('projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projeto $projeto)
    {
        $partnerships = PartnerShip::all();
        $selectedPartnerships = $projeto->partnerships->pluck('id')->toArray();
        return view('_admin.projeto.edit', compact('projeto', 'partnerships', 'selectedPartnerships'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjetoRequest $request, Projeto $projeto)
    {
        $fields = $request->validated();
        $projeto->estado = $request->input('estado');
        $projeto->fill($fields);
        $projeto->save();
    
        // Sincronize as parcerias associadas ao projeto
        if ($request->has('partnerships')) {
            $projeto->partnerships()->sync($request->input('partnerships'));
        } else {
            // Se nenhuma parceria for selecionada, remova todas as associações existentes
            $projeto->partnerships()->detach();
        }
    
        return redirect()
            ->route('admin.projeto.index')
            ->with('success', 'Projeto atualizado com sucesso');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projeto $projeto)
    {
        $projeto->partnerships()->detach();
        $projeto->delete();

        return redirect()
            ->route('admin.projeto.index')
            ->with('success', 'Projeto eliminado com sucesso');
    }

    public function indexFrontOffice()
    {
        $projetos = Projeto::all();
        $fotografias = FotografiaProjeto::where('destaque', true)->get();

        return view('projects', compact('projetos', 'fotografias'));
    }
}
