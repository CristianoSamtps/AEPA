@extends('layouts.master')

@section('title', 'AEPA')

@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')
    <main id="main">
        <section class="sugestoes">
            <div class="container-sugestoes">
                @if ($errors->any())
                    @include ('layouts.partials.error_master')
                @endif
                @if (!empty(session('success')))
                    @include ('layouts.partials.success_master')
                @endif
                <div class="containerED">
                    <div class="esq">
                        <img src="{{ asset('img/suggestBanner.svg') }}" alt="">
                    </div>
                    <div class="dir">
                        <div class="titulo">
                            <h2>Sugestões</h2>
                        </div>
                        <div class="adSuges">
                            <a href="#" onclick="openModal()">
                                <i class="fas fa-plus"></i> Nova sugestão
                            </a>
                        </div>
                        {{-- <div class="filtros">
                            <div class="search-box">
                                <input type="text" placeholder="Pesquisar...">
                                    <img src="{{ asset('img/lupa.svg') }}" alt="">
                            </div>
                        </div> --}}


                    </div>
                </div>

                @foreach ($sugestoesList as $sugestao)
                    <div class="card">
                        @if ($sugestao->member_doner->user->foto)
                            <img src="{{ asset('storage/user_fotos/' . $sugestao->member_doner->user->foto) }}"
                                alt="" class="profile-image">
                        @else
                            <img src="{{ asset('img/default_user.jpg') }}" alt="Foto de perfil" class="profile-image">
                        @endif
                        <h6 class="profile-name">{{ $sugestao->member_doner->user->name }}</h6>
                        <h2 class="name">{{ $sugestao->sugestao }}</h2>

                        <button class="btn" id="votoButton"><img src="{{ asset('img/logo_black.svg') }}">
                            <b>
                                {{ $sugestao->votos }}</b></button>
                    </div>
                @endforeach
                {{ $sugestoesList->links() }}
            </div>
        </section>
    </main>
    <div id="modal-container">
        <div id="modal">
            <form action="{{ route('registarsugestao', $sugestao) }}" id="sugestaoform" method='POST'>
                @csrf
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Nova Sugestão</h2>
                <input type="text" name="suges" id="suges" placeholder="Digite sua sugestão..."></textarea>
                <button onclick="submitSuggestion()">Enviar Sugestão</button>
            </form>
        </div>
    </div>


@endsection
@section('moreScripts')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function openModal() {
            $("#modal-container").fadeIn();
        }

        function closeModal() {
            $("#modal-container").fadeOut();
        }

        
    </script>
@endsection
