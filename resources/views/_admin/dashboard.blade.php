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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Guestões mais recentes</h4>
                    </div>
                    <div class="comment-widgets scrollable">
                        @foreach($allsuges as $sugestao)
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2"><img src="assets/images/users/1.jpg" alt="user" width="50"
                                    class="rounded-circle"></div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium"><td>{{$sugestao->member_doner->user->name}}</td></h6>
                                <span class="m-b-15 d-block">{{$sugestao->sugestao}}</span>
                                <div class="comment-footer">
                                    <span class="text-muted float-right">April 14, 2016</span>
                                    <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                    <button type="button" class="btn btn-success btn-sm">Publish</button>
                                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Progresso dos projetos</h4>
                        <div class="m-t-20">
                            <div class="d-flex no-block align-items-center">
                                <span>81% Clicks</span>
                                <div class="ml-auto">
                                    <span>125</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex no-block align-items-center m-t-25">
                                <span>72% Uniquie Clicks</span>
                                <div class="ml-auto">
                                    <span>120</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex no-block align-items-center m-t-25">
                                <span>53% Impressions</span>
                                <div class="ml-auto">
                                    <span>785</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex no-block align-items-center m-t-25">
                                <span>3% Online Users</span>
                                <div class="ml-auto">
                                    <span>8</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title m-b-0">Progresso dos eventos</h4>
                        <div class="m-t-20">
                            <div class="d-flex no-block align-items-center">
                                <span>81% Clicks</span>
                                <div class="ml-auto">
                                    <span>125</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex no-block align-items-center m-t-25">
                                <span>72% Uniquie Clicks</span>
                                <div class="ml-auto">
                                    <span>120</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex no-block align-items-center m-t-25">
                                <span>53% Impressions</span>
                                <div class="ml-auto">
                                    <span>785</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex no-block align-items-center m-t-25">
                                <span>3% Online Users</span>
                                <div class="ml-auto">
                                    <span>8</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="col-4">
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

            <div class="col-4">
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

            <div class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_projects }} </h1>
                        <h3 style="display:inline;"> Projetos </h3>
                    </div>
                    <div class="card-body">
                        {{-- @foreach ($count_events_per_user as $user)
                            <p>{{ $user->name }}: {{ $user->count_events }} projetos</p>
                        @endforeach --}}
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_partners }} </h1>
                        <h3 style="display:inline;"> Parceiros </h3>
                    </div>
                    <div class="card-body">
                        {{-- @foreach ($count_events_per_user as $user)
                            <p>{{ $user->name }}: {{ $user->count_events }} projetos</p>
                        @endforeach --}}
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_donations }} </h1>
                        <h3 style="display:inline;"> Doações </h3>
                    </div>
                    <div class="card-body">
                        {{-- @foreach ($count_events_per_user as $user)
                            <p>{{ $user->name }}: {{ $user->count_events }} projetos</p>
                        @endforeach --}}
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_suges }} </h1>
                        <h3 style="display:inline;"> Sugestões </h3>
                    </div>
                    <div class="card-body">
                        {{-- @foreach ($count_events_per_user as $user)
                            <p>{{ $user->name }}: {{ $user->count_events }} projetos</p>
                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div>

        <script src="
                https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js
                "></script>
    @endsection
