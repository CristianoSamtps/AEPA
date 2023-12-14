@extends('layouts.master')

@section('title', 'AEPA')

@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')
    <main id="main">
        <section class="sugestoes">
            <div class="container-sugestoes">
                <div class="titulo">
                    <h2>Sugestões</h2>
                </div>
                <div class="filtros">
                    <div class="search-box">
                        <input type="text" placeholder="Pesquisar...">
                        <a href="">
                            <img src="{{ asset('img/lupa.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="card-header py-3">
                    <a class="btn btn-primary" href="">
                      <i class="fas fa-plus"></i> Nova sugestão
                    </a>
                  </div>
                <div class="donates">
                    @foreach ($sugestoes as $sugestao)
                    <div class="card">
                        @if($sugestao->member_doner->user->foto)
                        <img src="{{asset('storage/user_fotos/'.$sugestao->member_doner->user->foto)}}" alt="" class="profile-image">
                        @else
                        <img src="{{asset('img/default_user.jpg')}}" alt="Foto de perfil" class="profile-image">
                        @endif
                        <h6 class="profile-name">{{ $sugestao->member_doner->user->name }}</h6>
                        <h2 class="name">{{$sugestao->sugestao}}</h2>
                        <button class="btn"><img src="{{ asset('img/logo_black.svg') }}"> {{$sugestao->votos}}</button>
                    </div>
                    @endforeach

                </div>

        </section>
    </main>

@endsection
