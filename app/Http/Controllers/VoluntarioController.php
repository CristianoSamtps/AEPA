<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Member_Doner;
use App\Models\Projeto;
use App\Models\Voluntariado;
use App\Models\FotografiaProjeto;
use Illuminate\Http\Request;


class VoluntarioController extends Controller
{

    public function registarvoluntariado(Request $request, Projeto $projeto_id)
    {
        $voluntario = Voluntariado::where('member_doner_id', auth()->user()->id);

        $voluntario = new Voluntariado();
        $voluntario->user_id = auth()->user()->id;

        $voluntario->projeto_id = $projeto_id->id;
        $voluntario->save();

        return redirect()->route('voluntariado')->with('success', 'Inscrição para voluntariado submetida com sucesso!');
    }

    public function index()
    {
        $projetosVoluntariado = Projeto::where('voluntariado', 1)->get();
        return view('_admin.voluntario.index', compact('projetosVoluntariado'));
    }

    /**
     * Display the specified resource.
     */
    public function show($projeto_id)
    {
        $projeto = Projeto::findOrFail($projeto_id);

    // Obter todos os voluntários relacionados a esse projeto
    $voluntarios = DB::table('voluntariado')
                        ->where('projeto_id', $projeto_id)
                        ->join('users', 'voluntariado.user_id', '=', 'users.id')
                        ->get(['voluntariado.*', 'users.name as user_name']);

    return view('_admin.voluntario.show', compact('projeto', 'voluntarios'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}

