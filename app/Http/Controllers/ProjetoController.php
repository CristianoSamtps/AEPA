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
        $projetos = new Projeto;
        $partnerships = PartnerShip::all();
        return view('_admin.projeto.create', compact('projetos', 'partnerships'));
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

        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('img/Cidades', 'public');

            $projetos->fotografias()->create([
                'foto' => $imagePath,
                'destaque' => true,
            ]);
        }

        $projetos->save();

        // Verificar se o campo voluntariado está marcado como 'Sim'
        if ($projetos->voluntariado == 1) {
            // Criar entrada na tabela voluntariado
            $projetos->voluntariado()->create([
                'user_id' => Auth::id(),
            ]);
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
        // $partnerships = PartnerShip::all();
        // $volunteer = Volunteer::all();
        // $donation = Donation::all();
        return view('_admin.projeto.edit', compact('projeto'));
        // return view('_admin.projeto.edit', compact('projetos', 'partnerships', 'volunteer', 'donation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjetoRequest $request, Projeto $projeto)
    {
        $fields = $request->validated();
        $projeto->estado = $request->input('estado');
        $projeto->fill($fields);

        // Atualize o campo voluntariado diretamente
        $projeto->voluntariado = $request->input('voluntariado', 0);
        $projeto->save();

        // Verificar se o campo voluntariado foi alterado para 'Sim'
        if ($request->input('voluntariado') == 1) {
            // Se já existe uma entrada na tabela voluntariado, não faça nada
            if ($projeto->voluntariado()->exists() == false) {
                // Se não existir, criar uma nova entrada na tabela voluntariado
                $projeto->voluntariado()->create([
                    'user_id' => Auth::id(),
                ]);
            }
        } else {
            // Se o campo voluntariado foi alterado para 'Não', remover qualquer entrada existente na tabela voluntariado
            $projeto->voluntariado()->delete();
        }

        $projeto->save();

        return redirect()
            ->route('admin.projeto.index')
            ->with('success', 'Projeto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projeto $projeto)
    {
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
