@extends('layouts.master')

@section('title', 'AEPA')


@section('styles')
    <link href="{{ asset('/css/styleG.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">
        <section class="top-donates">
            <div class="titulo">
                <h2>Top donates</h2>
            </div>
            {{-- <div class="filtros">
                <div class="search-box">
                    <input type="text" placeholder="Pesquisar...">
                    <a href="">
                        <img src="{{ asset('img/lupa.svg') }}" alt="">
                    </a>
                </div>
                <span class="switch">
                    <input type="checkbox" name="" id="switcher">
                    <label for="switcher"></label>
                </span>
            </div> --}}

            <div class="donates">
                @foreach ($member_doners as $member_doner)
                    <div class="card">
                            @if ($member_doner->user->foto)
                                <img src="{{ asset('storage/user_fotos/' . $member_doner->user->foto) }}"
                                    alt="" class="profile-image">
                            @else
                                <img src="{{ asset('img/default_user.jpg') }}" alt="Foto de perfil" class="profile-image">
                            @endif
                            <img src="{{ asset('img/default_user.jpg') }}" alt="Foto de perfil" class="profile-image">
                            <h2 class="name">{{ $member_doner->user->name }}</h2>


                        <button class="btn">{{ $member_doner->donations_sum_valor }} €</button>
                    </div>
                @endforeach

                <!--
                        <div class="card">
                            <img src="{{ asset('img/ana.jpg') }}" alt="" class="profile-image">
                            <h2 class="name">Joel Loureiro</h2>
                            <button class="btn">1361€</button>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/ana.jpg') }}" alt="" class="profile-image">
                            <h2 class="name">Joel Loureiro</h2>
                            <button class="btn">1361€</button>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/ana.jpg') }}" alt="" class="profile-image">
                            <h2 class="name">Joel Loureiro</h2>
                            <button class="btn">1361€</button>
                        </div </div>
                        -->
        </section>


    </main>

@endsection
