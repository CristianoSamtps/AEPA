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

                <div id="novaprojeto" data-aos="fade-down" class="col-lg-12">

                    <i class="fa-solid fa-circle-plus"></i>

                </div>
            </div>

        </div>

        <div class="col-lg-12"  data-aos-anchor-placement="bottom-bottom">

            <div class="row">

                <div id="exprojeto" class="col-lg-4">

                    <div class="fundo-projeto">
                        <img src="{{ asset('/img/incendio.jpg') }}" alt="Imagem do projeto">
                    </div>

                    <div class="info-projeto">

                        <h1>Projeto Amazonia</h1>

                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>

                    </div>

                </div>

                <div id="exprojeto" class="col-lg-4">

                    <div class="fundo-projeto">
                        <img src="{{ asset('/img/pobreza.avif') }}" alt="Imagem do projeto">
                    </div>

                    <div class="info-projeto">

                        <h1>Evolução</h1>

                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>

                    </div>

                </div>

                <div id="exprojeto" class="col-lg-4">

                    <div class="fundo-projeto">
                        <img src="{{ asset('/img/lixo.jpg') }}" alt="Imagem do projeto">
                    </div>

                    <div class="info-projeto">

                        <h1>Clean Ocean</h1>

                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>

                    </div>

                </div>

                <div id="exprojeto" class="col-lg-4">

                    <div class="fundo-projeto">
                        <img src="{{ asset('/img/incendio.jpg') }}" alt="Imagem do projeto">
                    </div>

                    <div class="info-projeto">

                        <h1>Projeto Amazonia</h1>

                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>

                    </div>

                </div>

                <div id="exprojeto" class="col-lg-4">

                    <div class="fundo-projeto">
                        <img src="{{ asset('/img/pobreza.avif') }}" alt="Imagem do projeto">
                    </div>

                    <div class="info-projeto">

                        <h1>Evolução</h1>

                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>

                    </div>

                </div>

                <div id="exprojeto" class="col-lg-4">

                    <div class="fundo-projeto">
                        <img src="{{ asset('/img/lixo.jpg') }}" alt="Imagem do projeto">
                    </div>

                    <div class="info-projeto">

                        <h1>Clean Ocean</h1>

                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>

                    </div>

                </div>

                <div id="exprojeto" class="col-lg-4">

                    <div class="fundo-projeto">
                        <img src="{{ asset('/img/incendio.jpg') }}" alt="Imagem do projeto">
                    </div>

                    <div class="info-projeto">

                        <h1>Projeto Amazonia</h1>

                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>

                    </div>

                </div>

                <div id="exprojeto" class="col-lg-4">

                    <div class="fundo-projeto">
                        <img src="{{ asset('/img/pobreza.avif') }}" alt="Imagem do projeto">
                    </div>

                    <div class="info-projeto">

                        <h1>Evolução</h1>

                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>

                    </div>

                </div>

                <div id="exprojeto" class="col-lg-4">

                    <div class="fundo-projeto">
                        <img src="{{ asset('/img/lixo.jpg') }}" alt="Imagem do projeto">
                    </div>

                    <div class="info-projeto">

                        <h1>Clean Ocean</h1>

                        <button><svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                <path d="M9.79988 17.9359C14.6835 17.9359 18.6418 13.9355 18.6418 8.99998C18.6418 4.06443 14.6835 0.0640373 9.79988 0.0640373C4.91629 0.0640373 0.958008 4.06443 0.958008 8.99998C0.958008 13.9355 4.91629 17.9359 9.79988 17.9359ZM7.12676 5.38552L8.33848 4.16091L13.0311 8.91833L8.33848 13.6758L7.12676 12.4511L10.6297 8.92576L7.12676 5.38552Z" fill="white" />
                            </svg>
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
