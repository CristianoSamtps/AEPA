<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\Projeto;
use App\Models\Donation;
use App\Models\PlanType;
use App\Models\Sugestao;
use App\Models\PhotoEvent;
use App\Models\PartnerShip;
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
    public function eventoinfo(Event $event){

        $events = Event::all();
        $photos_events = PhotoEvent::all();

            return view('eventoinfo', compact('event','events','photos_events'));

    }
    public function galeria()
    {
        return view('galeria');
    }
    public function loginReg()
    {
        return view('loginReg');
    }
    public function dashboard()
    {
        $count_events = Event::count();
        $count_projects = Projeto::count();
        $count_users = User::count();
        $count_partners = PartnerShip::count();
        $count_donations = Donation::count();
        $count_suges = Sugestao::count();


        $count_users_per_role = User::select('tipo', DB::raw('count(*) as
         count'))->groupBy('tipo')->get();

       /*  $count_events_per_user = User::withCount('events')->get(); */

        return view('_admin.dashboard', compact('count_events',
            'count_users','count_users_per_role','count_projects','count_partners','count_donations','count_suges'));
    }

}
