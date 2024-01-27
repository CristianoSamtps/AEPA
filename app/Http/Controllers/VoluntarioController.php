<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Projeto;
use App\Models\Voluntariado;
use App\Models\FotografiaProjeto;
use Illuminate\Http\Request;


class VoluntarioController extends Controller
{

    public function registarvoluntariado(Request $request, Projeto $projeto_id)
    {
        $voluntario=Voluntariado::where('member_doner_id',auth()->user()->id);

        $voluntario = new Voluntariado();
        $voluntario->user_id=auth()->user()->id;

        $voluntario->projeto_id=$projeto_id->id;
        $voluntario->save();

        return redirect()->route('voluntariado')->with('success', 'Inscrição para voluntariado submetida com sucesso!');
    }

}

