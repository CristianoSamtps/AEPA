<?php

namespace App\Http\Controllers;

use App\Models\PartnerShip;
use App\Http\Requests\PartnerShipRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PartnerShipController extends Controller
{

    public function index(Request $request)
    {
        $partners = [];

        if (count($request->all()) > 0) {
            $partnersQuery = PartnerShip::query();

            if ($request->filled('id')) {
                $partnersQuery->where('id', $request->id);
            }
            if ($request->filled('name')) {
                $partnersQuery->where('name', 'like', '%' . $request->name . '%');
            }
            if ($request->filled('descricao')) {
                $partnersQuery->where('descricao', $request->descricao);
            }

            $partners = $partnersQuery->get();
        } else {
            $partners = PartnerShip::all();
        }

        return view('_admin.patrocinadores.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partner = new PartnerShip();
        return view('_admin.patrocinadores.create', compact("partner"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerShipRequest $request)
    {
        // Valida os dados do request com as regras definidas no PartnerShipRequest
        $validatedData = $request->validated();

        // Cria uma nova instância do modelo PartnerShip com os dados validados
        $partner = PartnerShip::create($validatedData);

        // Verifica se o request contém 'foto'
        if ($request->hasFile('foto')) {
            // Armazena 'foto' na pasta 'public/partner_fotos' e obtém o caminho
            $foto_path = $request->file('foto')->store('public/partner_fotos');

            // Define o atributo 'foto' do modelo PartnerShip com o nome do arquivo
            $partner->foto = basename($foto_path);
        }

        // Salva as alterações no banco de dados
        $partner->save();

        // Redireciona para a rota 'admin.patrocinadores.show' mostrando os detalhes do novo parceiro
        return redirect()->route('admin.patrocinadores.show', $partner)
            ->with('success', 'Parceiro criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $partner = PartnerShip::find($id);

        return view('_admin.patrocinadores.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PartnerShip $partner)
    {
        return view('_admin.patrocinadores.edit', compact('partner'));
    }
    public function patrocinadores(PartnerShip $partner)
    {
        $partners = PartnerShip::all();
        return view('patrocinadores', compact('partners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartnerShipRequest $request, PartnerShip $partner)
    {
        // Valida os dados
        $fields = $request->validated();

        // Preenche os campos com os dados validados
        $partner->fill($fields);

        // Verifica se contém 'foto'
        if ($request->hasFile('foto')) {
            // Verifica se já possui uma foto 
            if (!empty($partner->foto)) {
                // Se sim exclui a foto existente no armazenamento
                Storage::disk('public')->delete('partner_fotos/' . $partner->foto);
            }

            // Armazena 'foto' na pasta 'public/partner_fotos'
            $foto_path = $request->file('foto')->store('public/partner_fotos');

            $partner->foto = basename($foto_path);
        }

        // Salva as alterações
        $partner->save();

        return redirect()->route('admin.patrocinadores.index')
            ->with('success', 'Patrocinador atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PartnerShip $partner)
    {
        $partner->delete();

        return redirect()->route('admin.patrocinadores.index')->with(
            'success',
            'Patrocinador eliminado com sucesso'
        );
    }
    public function destroy_foto(PartnerShip $partner)
    {
        Storage::disk('public')->delete('partner_fotos/' . $partner->foto);
        $partner->foto = null;
        $partner->save();
        return redirect()->route('admin.patrocinadores.edit', $partner)->with(
            'success',
            'A foto do Patrocinador foi apagada com sucesso.'
        );
    }
}
