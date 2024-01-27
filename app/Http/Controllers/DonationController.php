<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\DoacaoRequest;


class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doacoes = Donation::all();
        return view('_admin.doacoes.index', compact('doacoes'));
    }

    public function userDonations(User $user)
    {
        // Carrega as doações do usuário
        $doacoes = $user->doacoes;

        // Verifica se há doações antes de acessar propriedades
        if ($doacoes->isNotEmpty()) {
            return view('indexperfil', compact('user', 'doacoes'));
        } else {
            // Caso não haja doações, você pode lidar com isso de acordo com seus requisitos
            return view('indexperfil', compact('user'))->with('error', 'O usuário não possui doações.');
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

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
    public function show(Donation $doacao)
    {
            return view('_admin.doacoes.show', compact('doacao'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donation $doacao)
    {
        $doacao->delete();
        return redirect()->route('admin.doacoes.index')->with('success',
        'Doação eliminada com sucesso');
    }

    /* public function doarProjetos(Projeto $projeto)
    {
        $projetos = Projeto::all();
        return view('detalheDoacoes', compact('projetos','projeto'));
    } */
}
