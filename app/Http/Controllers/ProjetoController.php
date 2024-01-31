<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Projeto;
use App\Models\Voluntariado;
use App\Models\FotografiaProjeto;
use App\Models\PartnerShip;
use Illuminate\Http\Request;
use App\Http\Requests\ProjetoRequest;
use App\Models\Donation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProjetoController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtém todas as fotografias de projetos e todos os projetos
        $fotografias_projetos = FotografiaProjeto::all();
        $projetos = Projeto::all();

        // Retorna a vista index com os projetos e fotografias
        return view('_admin.projeto.index', compact('projetos', 'fotografias_projetos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Cria uma nova instância de Projeto e obtém todas as parcerias
        $projeto = new Projeto;
        $partnerships = PartnerShip::all();

        // Retorna a vista create com o projeto e as parcerias
        return view('_admin.projeto.create', compact('projeto', 'partnerships'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjetoRequest $request)
    {
        // Valida os campos do pedido
        $fields = $request->validated();

        // Cria uma nova instância de Projeto e preenche os campos
        $projetos = new Projeto();
        $projetos->fill($fields);

        // Define o estado e voluntariado com base no pedido
        $projetos->estado = $request->input('estado');
        $projetos->voluntariado = $request->input('voluntariado', 0);

        // Salva o projeto no armazenamento
        $projetos->save();

        // Se uma imagem for enviada, armazena-a como destaque
        if ($request->hasFile('fotografia')) {
            $imagem = $request->file('fotografia');
            $path = $imagem->store('project_photos', 'public');

            $foto = new FotografiaProjeto;

            $foto->foto = basename($path);

            $foto->destaque = 1; // Definir imagem automaticamente como destaque

            $projetos->fotografias()->save($foto);
        }

        // Se parcerias foram selecionadas, associa-as ao projeto
        if ($request->has('partnerships')) {
            foreach ($request->input('partnerships') as $partnershipId) {
                $projetos->partnerships()->attach($partnershipId);
            }
        }

        // Redireciona para a página de index com uma mensagem de sucesso
        return redirect()
            ->route('admin.projeto.index')
            ->with('success', 'Projeto criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projeto $projeto)
    {
        // Retorna a vista show com o projeto
        return view('_admin.projeto.show', compact('projeto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projeto $projeto)
    {
        // Obtém todas as parcerias e as parcerias associadas ao projeto
        $partnerships = PartnerShip::all();
        $selectedPartnerships = $projeto->partnerships->pluck('id')->toArray();

        // Retorna a vista edit com o projeto, parcerias e parcerias selecionadas
        return view('_admin.projeto.edit', compact('projeto', 'partnerships', 'selectedPartnerships'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjetoRequest $request, Projeto $projeto)
    {
        // Valida os campos do pedido
        $fields = $request->validated();

        // Define o estado do projeto com base no pedido
        $projeto->estado = $request->input('estado');

        // Preenche os campos do projeto
        $projeto->fill($fields);

        // Obtém a fotografia de destaque atual
        $fotoAtual = $projeto->fotografias()->where('destaque', 1)->first();

        // Sincroniza as parcerias associadas ao projeto
        if ($request->has('partnerships')) {
            $projeto->partnerships()->sync($request->input('partnerships'));
        } else {
            // Se nenhuma parceria for selecionada, remove todas as associações existentes
            $projeto->partnerships()->detach();
        }

        // Se uma nova imagem for enviada, adiciona-a automaticamente como destaque
        if ($request->hasFile('fotografia')) {

            // Elimina a fotografia de destaque anterior do armazenamento
            if ($fotoAtual) {
                Storage::disk('public')->delete('project_photos/' . $fotoAtual->foto);
            }

            $imagem = $request->file('fotografia');
            $path = $imagem->store('project_photos', 'public');

            $foto = new FotografiaProjeto;
            $foto->foto = basename($path);
            $foto->destaque = 1; // Definir automaticamente como destaque

            $projeto->fotografias()->update(['foto' => $foto->foto, 'destaque' => $foto->destaque]);
        }

        // Salva as alterações no projeto
        $projeto->save();

        // Redireciona para a página de index com uma mensagem de sucesso
        return redirect()
            ->route('admin.projeto.index')
            ->with('success', 'Projeto atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projeto $projeto)
    {
        // Remove todas as imagens associadas ao projeto do armazenamento
        $projeto->fotografias->each(function ($foto) {
            Storage::disk('public')->delete('project_photos/' . $foto->foto);
        });

        // Remove todas as entradas de imagens associadas ao projeto da base de dados
        $projeto->fotografias()->delete();

        // Remove as parcerias associadas ao projeto
        $projeto->partnerships()->detach();

        // Remover o projeto
        $projeto->delete();

        // Redireciona para a página de index com uma mensagem de sucesso
        return redirect()
            ->route('admin.projeto.index')
            ->with('success', 'Projeto eliminado com sucesso');
    }

    public function indexFrontOffice()
    {
        // Obtém todos os projetos e as fotografias em destaque
        $projetos = Projeto::all();
        $fotografias = FotografiaProjeto::where('destaque', true)->get();

        // Retorna a vista projects com os projetos e fotografias
        return view('projects', compact('projetos', 'fotografias'));
    }
}
