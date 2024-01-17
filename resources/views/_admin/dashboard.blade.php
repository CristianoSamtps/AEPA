@extends('layouts.admin')


@section('title')
    Dashboard
@endsection

@section('backoffice-content')


    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <a href="">
                            <h1 class="font-light text-white"><i class="fa-solid fa-hand-holding-dollar"></i></h1>
                            <h6 class="text-white">Doações</h6>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <a href="{{ route('admin.eventos.index') }}">
                            <h1 class="font-light text-white"><i class="fa-solid fa-thumbtack"></i></h1>
                            <h6 class="text-white">Eventos</h6>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <a href="{{ route('admin.projeto.index') }}">
                            <h1 class="font-light text-white"><i class="fa-solid fa-umbrella-beach"></i></h1>
                            <h6 class="text-white">Projetos</h6>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <a href="{{ route('admin.sugestoes.index') }}">
                            <h1 class="font-light text-white"><i class="fa-solid fa-message"></i></h1>
                            <h6 class="text-white">Suguestões</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Análise do website</h4>
                            </div>
                        </div>
                        <div class="row">
                            {{-- <div class="col-lg-7">
                                <div class="">
                                    <div style=""> {!! $chart->container() !!}</div>
                                    <script src="{{ $chart->cdn() }}"></script>
                                {{ $chart->script() }}
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-user m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">2540</h5>
                                            <small class="font-light">Total Users</small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-plus m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">120</h5>
                                            <small class="font-light">New Users</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">656</h5>
                                            <small class="font-light">Total Shop</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-tag m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">9540</h5>
                                            <small class="font-light">Total Orders</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-table m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">100</h5>
                                            <small class="font-light">Pending Orders</small>
                                        </div>
                                    </div>
                                    <div class="col-6 m-t-15">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-globe m-b-5 font-16"></i>
                                            <h5 class="m-b-0 m-t-5">8540</h5>
                                            <small class="font-light">Online Orders</small>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-4 mt-2">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-user m-b-5 font-16"></i>
                                            @if (isset($count_users))
                                            <h5 class="m-b-0 m-t-5">{{ $count_users }}</h5>
                                            @else
                                            <h5 class="m-b-0 m-t-5">0</h5>
                                            @endif
                                            <small class="font-light">Utilizadores</small>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-thumbtack m-b-5 font-16"></i>
                                            @if (isset($count_events))
                                            <h5 class="m-b-0 m-t-5">{{ $count_events }}</h5>
                                            @else
                                            <h5 class="m-b-0 m-t-5">0</h5>
                                            @endif
                                            <small class="font-light">Eventos</small>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-umbrella-beach m-b-5 font-16"></i>
                                            @if (isset($count_projects))
                                            <h5 class="m-b-0 m-t-5">{{ $count_projects }}</h5>
                                            @else
                                            <h5 class="m-b-0 m-t-5">0</h5>
                                            @endif
                                            <small class="font-light">Projetos</small>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-message m-b-5 font-16"></i>
                                            @if (isset($count_suges))
                                            <h5 class="m-b-0 m-t-5">{{ $count_suges }}</h5>
                                            @else
                                            <h5 class="m-b-0 m-t-5">0</h5>
                                            @endif
                                            <small class="font-light">Sugestões</small>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-table m-b-5 font-16"></i>
                                            @if (isset($count_donations))
                                            <h5 class="m-b-0 m-t-5">{{ $count_donations }}</h5>
                                            @else
                                            <h5 class="m-b-0 m-t-5">0</h5>
                                            @endif
                                            <small class="font-light">Doações</small>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-2">
                                        <div class="bg-dark p-10 text-white text-center">
                                            <i class="fa fa-globe m-b-5 font-16"></i>
                                            @if (isset($count_partners))
                                            <h5 class="m-b-0 m-t-5">{{ $count_partners }}</h5>
                                            @else
                                            <h5 class="m-b-0 m-t-5">0</h5>
                                            @endif
                                            <small class="font-light">Parceiros</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- column -->
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_users }} </h1>
                        <h3 style="display:inline;"> Utilizadores </h3>
                    </div>
                    <div class="card-body">
                        @foreach ($count_users_per_role as $item)
                            <p>{{ $item->tipoToStr() }}: {{ $item->count }} utilizadore(s)</p>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_events }} </h1>
                        <h3 style="display:inline;"> Eventos </h3>
                    </div>
                    <div class="card-body">
                        @foreach ($events_with_participant_count as $event)
                            <p>{{ $event->name }}: {{ $event->participants_count }} participante(s)</p>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_projects }} </h1>
                        <h3 style="display:inline;"> Projetos </h3>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_partners }} </h1>
                        <h3 style="display:inline;"> Parceiros </h3>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_donations }} </h1>
                        <h3 style="display:inline;"> Doações </h3>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_suges }} </h1>
                        <h3 style="display:inline;"> Sugestões </h3>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div> --}}


            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sugestões mais recentes</h4>
                    </div>
                    <div class="comment-widgets scrollable">
                        @if (isset($suges))
                            @foreach ($suges as $sugestao)
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2">
                                        @if ($sugestao->member_doner->user->foto)
                                            <img src="{{ asset('storage/user_fotos/' . $sugestao->member_doner->user->foto) }}"
                                                alt="user" width="50" class="rounded-circle">
                                        @else
                                            <img src="{{ asset('img/default_user.jpg') }}" alt="Foto de perfil"
                                                width="50" class="rounded-circle">
                                        @endif
                                    </div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">
                                            <td>{{ $sugestao->member_doner->user->name }}</td>
                                        </h6>
                                        <span class="m-b-15 d-block">{{ $sugestao->sugestao }}</span>
                                        <div class="comment-footer">
                                            <span
                                                class="text-muted float-right">{{ $sugestao->created_at->format('Y-m-d H:i') }}</span>
                                            <button type="button" class="btn btn-success btn-sm">Publicar</button>
                                            <button type="button" class="btn btn-danger btn-sm">Apagar</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Não existem sugestões novas pendentes.</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Progresso dos projetos</h4>
                        @if (isset($proj))
                        @foreach ($proj as $projetos)
                            <div class="m-t-20">
                                <div class="d-flex no-block align-items-center">
                                    <span>{{ $projetos->titulo }}</span>
                                    <div class="ml-auto">
                                        <span>{{ $projetos->objetivos }} €</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                        style="width: {{ ($projetos->donations()->sum('valor') * 100) / $projetos->objetivos }}%"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endforeach
                        @else
                            <p>Não existem projetos.</p>
                        @endif
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Participantes em eventos</h4>
                        @if (isset($events_with_participant_count))
                        @foreach ($events_with_participant_count as $event)
                            <div class="m-t-20">
                                <div class="d-flex no-block align-items-center">
                                    <span>{{ $event->name }}</span>
                                    <div class="ml-auto">
                                        <span>{{ $event->participants_count }} / {{ $event->vagas }}</p></span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar"
                                        style="width: {{ ($event->participants_count / $event->vagas) * 100 }}%"
                                        aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endforeach
                        @else
                        <p>Não existem eventos de momento.</p>
                    @endif
                    </div>
                </div>
            </div>


        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var progressBars = document.querySelectorAll('.progress-bar');
            var colors = ['bg-success', 'bg-info', 'bg-warning', 'bg-danger'];

            progressBars.forEach(function(bar, index) {
                var colorClass = colors[index % colors.length];
                bar.classList.add(colorClass);
            });
        });
    </script>
@endsection
