<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Projeto;
use App\Models\Voluntariado;
use App\Models\FotografiaProjeto;
use Illuminate\Http\Request;




class VoluntarioController extends Controller
{


    public function submitApplication(Request $request)
    {
        $validatedData = $request->validate([
            'projeto_id' => 'required|exists:projetos,id',
            // outras validações necessárias
        ]);

        $voluntario = new Voluntariado();
        $voluntario->projeto_id = $validatedData['projeto_id'];
        $voluntario->user_id = auth()->id();
        $voluntario->save();

        return redirect()->route('voluntariado')->with('success', 'Inscrição para voluntariado enviada com sucesso!');
    }

}
