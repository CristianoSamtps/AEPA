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


    public function listarFotografias()
    {
        $fotografias = FotografiaProjeto::all();
        $fotografiaseventos = PhotoEvent::all();
        return view('galeria', compact('fotografias', 'fotografiaseventos'));
    }

    public function detalhesDoacoes(Projeto $projeto)
    {
        $projetos = Projeto::all();
        return view('detalheDoacoes', compact('projetos', 'projeto'));
    }

    public function topDonates()
    {

        $doacoes = Donation::whereNull('projeto_id')->get();
        $member_doners = Member_Doner::whereHas('donations')
            ->with(['user', 'donations'])
            ->withSum('donations', 'valor')
            ->orderBy('donations_sum_valor', 'desc')
            ->take(10)
            ->get();

        return view('topDonates', compact('doacoes', 'member_doners'));
    }

    public function detalheDoacoes()
    {
        $projetos = Projeto::has('donations')->get();
        $doacoes = Donation::whereNull('projeto_id')->get();
        return view('detalheDoacoes', compact('doacoes', 'doacoes'));
    }
    public function doacoes()
    {
        $projetos = Projeto::all();
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

    public function tornarMembro()
    {
        $planTypes = PlanType::paginate(4);
        return view('tornarMembro', compact('planTypes'));
    }

    public function pagamentoMembro($id)
    {
        $planoSelecionado = PlanType::find($id);
        if (!$planoSelecionado) {
            return redirect()->back()->with('error', 'Plano não encontrado.');
        }


        return view('pagamentoMembro', compact('planoSelecionado'));
    }

    public function sobreNos()
    {
        return view('sobreNos');
    }

    public function eventos(Request $request)
    {
        $topevent = Event::where('data', '>=', now())->orderBy('data', 'asc')->first();

        if ($request->has('order_by_date')) {
            $order = $request->input('order_by_date');
            // Verifica se a ordem é ascendente ou descendente
            $orderDirection = ($order == 'asc') ? 'asc' : 'desc';

            // Se a opção escolhida for "todos"
            if ($order == 'all') {
                // Obtém todos os eventos, independentemente da data
                $events = Event::orderBy('data', $orderDirection)->get();
            } else {
                // Obtém apenas os eventos cuja data seja igual ou superior à atual
                $events = Event::where('data', '>=', now())->orderBy('created_at', $orderDirection)->get();
            }
        } else {
            // Se não houver filtro, obtém todos os eventos
            $events = Event::where('data', '>=', now())->get();
        }

        foreach ($events as $eventshort) {
            $eventshort->descricao = Str::limit($eventshort->descricao, $words = 56, $end = '...');
        }

        // Patrocinadores de eventos
        $patrocinadores = Partnership::all();

        return view('eventos', compact('events', 'topevent', 'eventshort', 'patrocinadores'));
    }

    public function eventoinfo(Event $event, Request $request)
    {
        $events = Event::all();
        $photos_events = PhotoEvent::all();
        $partners = PartnerShip::count();
        $participants = Participant::all();

        if ($request->has('order_by_date')) {
            $order = $request->input('order_by_date');
            // Verifica se a ordem é ascendente ou descendente
            $orderDirection = ($order == 'asc') ? 'asc' : 'desc';

            // Se a opção escolhida for "todos"
            if ($order == 'all') {
                // Obtém todos os eventos, independentemente da data
                $events = Event::orderBy('data', $orderDirection)->get();
            } else {
                // Obtém apenas os eventos cuja data seja igual ou superior à atual
                $events = Event::where('data', '>=', now())->orderBy('created_at', $orderDirection)->get();
            }
        } else {
            // Se não houver filtro, obtém todos os eventos
            $events = Event::where('data', '>=', now())->get();
        }

        foreach ($events as $eventshort) {
            $eventshort->descricao = Str::limit($eventshort->descricao, $words = 56, $end = '...');
        }

        return view('eventoinfo', compact('event', 'events', 'photos_events', 'eventshort', 'participants'));
    }

    public function project_details(Projeto $projeto)
    {
        $doacoes = Donation::where('projeto_id', $projeto->id)->get();

        $valorArrecadado = $doacoes->sum('valor');

        $doadores = $doacoes->map(function ($doacao) {
            $doadorNome = ($doacao->anonimo == 'S') ? 'Doador Anônimo' : ($doacao->doador ? $doacao->doador->name : 'Doador Não Encontrado');

            return [
                'doador' => $doadorNome,
                'valor' => $doacao->valor,
                'mensagem' => $doacao->title,
                'data' => $doacao->created_at->format('d/m/Y'),
            ];
        });

        return view('project_details', compact('projeto', 'doadores', 'valorArrecadado'));
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
