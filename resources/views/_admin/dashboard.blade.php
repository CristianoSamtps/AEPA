@extends('layouts.admin')


@section("title")
    Dashboard
@endsection

@section('backoffice-content')

<div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="card shadow">
                    <div class="card-header p-4">
                        <h1 style="display:inline;"> {{ $count_users }} </h1>
                        <h3 style="display:inline;"> Utilizadores </h3>
                    </div>
                    <div class="card-body">
                        @foreach ($count_users_per_role as $item)
                            <p>{{ $item->tipoToStr() }}: {{ $item->count }} utilizadores</p>
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
                        {{-- @foreach ($count_events_per_user as $user)
                            <p>{{ $user->name }}: {{ $user->count_events }} projetos</p>
                        @endforeach --}}
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
    </div>

@endsection
