<?php

namespace App\Http\Controllers;

use App\Http\Requests\registarvoluntarioRequest;
use Illuminate\Support\Facades\Auth;
use App\Charts\MonthlyUsersChart;
use App\Models\User;
use App\Models\Event;
use App\Models\Projeto;
use App\Models\Member_Doner;
use App\Models\Donation;
use App\Models\Participant;
use App\Models\PlanType;
use App\Models\Sugestao;
use App\Models\PhotoEvent;
use App\Models\PartnerShip;
use App\Models\Voluntariado;
use App\Models\FotografiaProjeto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;


class PageController extends Controller
{
    public function index()
    {
        $projetos = Projeto::all();
        $sugestoes = Sugestao::all();

        $fotografias = FotografiaProjeto::where('destaque', true)->get();
        $sugestoesList = Sugestao::where('listado', 'L')->take(3)->get();

        foreach ($projetos as $projeto) {
            $projeto->subtitulo = str::limit($projeto->subtitulo, 100);
            $projeto->localidade = strstr($projeto->localidade, ',', true);
        }

        return view('index', compact('sugestoes', 'sugestoesList', 'projetos', 'fotografias'));
    }

    public function detalhesDoacoes(Projeto $projeto)
    {
        $projetos = Projeto::all();
        return view('detalheDoacoes', compact('projetos','projeto'));
    }

    public function topDonates()
    {

        $doacoes = Donation::whereNull('projeto_id')->get();
        $member_doner = Member_Doner::orderByTotalDoado()->get();
        dd($member_doner->toArray());
        return view('topDonates', compact('doacoes', '$member_doner'));
    }

    public function detalheDoacoes()
    {
        $projetos = Projeto::has('donations')->get();
        $doacoes = Donation::whereNull('projeto_id')->get();
        return view('detalheDoacoes', compact('doacoes', 'doacoes'));
    }
    public function doacoes()
    {
        $projetos = Projeto::has('donations')->get();
        $doacoes = Donation::whereNull('projeto_id')->get();
        return view('doacoes', compact('projetos', 'doacoes'));
    }
    public function sugestoes()
    {
        $sugestoes = Sugestao::all();
        $sugestoesList = Sugestao::where('listado', 'L')->paginate(8);
        return view('sugestoes', compact('sugestoes', 'sugestoesList'));
    }
    public function patrocinadores()
    {
        $patrocinadores = Partnership::all();

        return view('patrocinadores', ['patrocinadores' => $patrocinadores]);
    }
    public function projects()
    {
        return view('projects');
    }

    /* Sistema de Voluntariado */

    public function voluntariado()
    {
        $projetosVoluntariado = Projeto::where('voluntariado', 1)->get();
        $fotografias = FotografiaProjeto::whereIn('projeto_id', $projetosVoluntariado->pluck('id'))->get();

        return view('voluntariado', compact('projetosVoluntariado', 'fotografias'));
    }

    public function inscricao($projeto_id)
    {
        // Verifica se o usuário está autenticado
        $user = auth()->user();

        // Se não estiver autenticado, redireciona para a página de login
        if (!$user) {
            return redirect()->route('login');
        }

        // Busca o projeto pelo ID passado como parâmetro
        $projeto = Projeto::findOrFail($projeto_id); // Usar findOrFail para garantir que o projeto exista

        // Passa o projeto e o usuário para a view
        return view('inscricao', compact('projeto', 'user'));
    }

    /* Sistema de Voluntariado - final */


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
        $planTypes = PlanType::paginate(4);
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
        $events = Event::paginate(4);
        $topevent = Event::orderBy('data', 'desc')->first();

        foreach ($events as $eventshort) {
            $eventshort->descricao = str::limit($eventshort->descricao, $words = 56, $end = '...');
        }

        return view('eventos', compact('events', 'topevent', 'eventshort'));
    }
    public function eventoinfo(Event $event)
    {

        $events = Event::all();
        $photos_events = PhotoEvent::all();
        $partners = PartnerShip::count();

        foreach ($events as $eventshort) {
            $eventshort->descricao = str::limit($eventshort->descricao, 60);
        }
        return view('eventoinfo', compact('event', 'events', 'photos_events', 'eventshort'));
    }
    public function galeria()
    {
        return view('galeria');
    }
    public function loginReg()
    {
        return view('loginReg');
    }
    public function dashboard(MonthlyUsersChart $chart)
    {
        /* Listar cards com contagens */
        $count_events = Event::count();
        $count_projects = Projeto::count();
        $count_users = User::count();
        $count_partners = PartnerShip::count();
        $count_donations = Donation::count();
        $count_suges = Sugestao::count();
        $participants = Participant::count();

        /* Obter dados para calcular barras de progresso */
        $donations = Donation::all();
        $events_with_participant_count = Event::has('participants')->withCount('participants')->orderByDesc('participants_count')->take(4)->get();
        $count_users_per_role = User::select('tipo', DB::raw('count(*) as count'))->groupBy('tipo')->get();

        /* Limitar a quantidade de dados adquiridos */
        $suges = Sugestao::where('listado', 'NL')->orderByDesc('created_at')->take(3)->get();
        $events = Event::take('4')->get();
        $proj = Projeto::take('4')->get();
        $recent_donations = Donation::orderByDesc('created_at')->get();


        return view('_admin.dashboard', [
            'chart' => $chart->build(),
        ])->with(compact('recent_donations', 'count_events', 'count_users', 'count_users_per_role', 'count_projects', 'count_partners', 'count_donations', 'count_suges', 'events_with_participant_count', 'suges', 'proj', 'donations', 'events'));
    }
}
