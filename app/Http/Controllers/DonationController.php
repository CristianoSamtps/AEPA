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


    public function userDonations(Request $request, User $user)
    {
        $doacoes = $user->doacoes();

        // Aplica os filtros se estiverem presentes nos parâmetros da consulta
        if ($request->has('data')) {
            if ($request->data === 'recentes') {
                $doacoes->orderByDesc('created_at');
            } elseif ($request->data === 'antigas') {
                $doacoes->orderBy('created_at');
            }
        }

        if ($request->has('preco')) {
            if ($request->preco === 'desc') {
                $doacoes->orderByDesc('valor');
            } elseif ($request->preco === 'asc') {
                $doacoes->orderBy('valor');
            }
        }

        if ($request->has('visibilidade')) {
            if ($request->visibilidade === 'anonimo') {
                $doacoes->where('anonimo', 'S');
            } elseif ($request->visibilidade === 'nao-anonimo') {
                $doacoes->where('anonimo', 'N');
            }
        }

        $doacoes = $doacoes->get();

        if ($doacoes->isNotEmpty()) {
            return view('donationsperfil', compact('user', 'doacoes'));
        } else {
            return view('donationsperfil', compact('user'))->with('error', 'O usuário não possui doações.');
        }
    }



    public function registarDoacao(Request $request)
    {
        /* $fields = $request->validate(['valor' => 'required']);
        $doacao = new Donation();

        $doacao->valor=$request->valor;
        $doacao->anonimo=$request->anonimo;
        if($doacao=$request->anonimo == 1){
            $doacao->member_doner_id=auth()->user()->id;
            $doacao->anonimo='N';
        }else{
            $doacao->anonimo='S';
        }
        $doacao->title=$request->mens
        $doacao->projeto_id=0;

        $doacao->doacao = $request->valor;
        $doacao->doacao = $request->anonimo;
        if ($doacao = $request->anonimo == 1) {
            $doacao->member_doner_id = auth()->user()->id;
            $doacao->anonimo = 'N';
        } else {
            $doacao->anonimo = 'S';
        }
        $doacao->projeto_id = 0;
        $doacao->save();
        return redirect()->back()
            ->with('success', 'Doação registada com sucesso'); */
    }
    /**
     *
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
        return redirect()->route('admin.doacoes.index')->with(
            'success',
            'Doação eliminada com sucesso'
        );
    }

    /* public function doarProjetos(Projeto $projeto)
    {
        $projetos = Projeto::all();
        return view('detalheDoacoes', compact('projetos','projeto'));
    } */
}
