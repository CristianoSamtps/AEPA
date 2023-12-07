<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doacao;
use App\Models\User;



class DonationsController extends Controller
{
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
}
