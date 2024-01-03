<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Projeto;
use App\Models\Donation;

use App\Models\PlanType;
use App\Models\Sugestao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function topDonates()
    {
        return view('topDonates');
    }
    public function doacoes()
    {
        $projetos = Projeto::has('donations')->get();
        $doacoes = Donation::whereNull('projeto_id')->get();
        return view('doacoes', compact('projetos','doacoes'));
    }
    public function sugestoes()
    {
        $sugestoes = Sugestao::all();
        $sugestoesList = Sugestao::where('listado', 'L')->get();
        return view('sugestoes', compact('sugestoes','sugestoesList'));

    }
    public function patrocinadores()
    {
        return view('patrocinadores');
    }

    public function projects()
    {
        return view('projects');
    }

    public function project_detail1()
    {
        return view('project_detail1');
    }

    public function project_detail2()
    {
        return view('project_detail2');
    }

    public function tornarMembro()
    {
        $planTypes = PlanType::all();
        return view('tornarMembro', compact('planTypes'));
    }

    public function pagamentoMembro()
    {
        return view('pagamentoMembro');
    }

    public function sobreNos()
    {
        return view('sobreNos');
    }

    public function eventos()
    {
        $events = Event::all();
        $topevent = Event::orderBy('data', 'desc')->first();
        return view('eventos', compact('events','topevent'));
    }
    public function galeria()
    {
        return view('galeria');
    }
    public function loginReg()
    {
        return view('loginReg');
    }
    // public function perfil()
    // {
    //     return view('perfil');
    // }
    public function dashboard()
    {
        return view('_admin.dashboard');
    }

}
