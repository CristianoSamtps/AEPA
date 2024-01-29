@extends('layouts.master')

@extends('layouts.usertemplate')

@section('title', 'AEPA - Projetos')

@section('styles')
<link href="{{ asset('/css/projetosperfil.css') }}" rel="stylesheet">
@endsection

@section('main-content')


<div class="container-fluid">

    <div class="row justify-content-center" {{-- data-aos="fade-up" --}} data-aos-anchor-placement="bottom-bottom">
        <div class="col-lg-12" data-aos="fade-left" data-aos-anchor-placement="bottom-bottom">

            <div class="row">

                <a href="{{ route('projects') }}">
                    <div id="novaprojeto" data-aos="fade-down" class="col-lg-12">
                        <i class="fa-solid fa-circle-plus"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-12" data-aos-anchor-placement="bottom-bottom">
            <div class="row">
                @if (count($projetos) > 0)
                @foreach ($projetos as $projeto)
                <div id="exprojeto" class="col-12 col-lg-4">
                    <div class="fundo-projeto">
                        @if ($projeto->fotografias)
                        <img src="{{ asset('storage/project_photos/' . $projeto->fotografias->first()->foto) }}" alt="Imagem do projeto" class="img-post">
                        @else
                        <img src="{{ asset('public/assets/images/project.jpg') }}" alt="Imagem do ilustrativa">
                        @endif
                    </div>
                    <div class="info-projeto">
                        <h1>{{ $projeto->titulo }}</h1>
                        <!-- Adicione outras informações do projeto conforme necessário -->
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
                @else
                <div id="semprojeto" class="col-lg-12">
                    <div class="fundo-projeto text-center">
                        <p>Não está a participar em nenhum projeto..</p>
                    </div>
                </div>
                @endif
            </div>
        </div>


    </div>

</div>

@endsection