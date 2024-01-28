@extends('layouts.master')

@section('title', 'Sobre nós')

@section('styles')

    <link href="{{ asset('/css/styleIndex.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/stylesobreNos.css') }}" rel="stylesheet">
@endsection

@section('main')

    <main id="main">

        <section class="container hidden" id="indexHero">
            <div class="row col-lg-12">
                <div class="col-lg-6 heroinfo">
                    <h1>História e Missão</h1>
                    <h5>Juntos pela Natureza, a AEPA trilha caminhos de preservação e sustentabilidade. Somos uma comunidade
                        comprometida com a projeção do ambiente.
                    </h5>
                    <div id="sobreCards" class="d-flex col-md-12">
                        <div id="card-box" class="col-md-4">
                            <h4>100.000
                                hectares
                                replantados</h4>
                            <p class="sobreCardsInfor">Reconstruir o ambiente ao nosso redor e manter as florestas limpas
                            </p>
                        </div>
                        <div id="card-box" class="col-md-4">
                            <h4>5000
                                produtos
                                reciclados</h4>
                            <p class="sobreCardsInfor">Reconstruir o ambiente ao nosso redor e manter as florestas limpas
                            </p>
                        </div>
                        <div id="card-box" class="col-md-4">
                            <h4>+3000
                                voluntários
                                anuais</h4>
                            <p class="sobreCardsInfor">Reconstruir o ambiente ao nosso redor e manter as florestas limpas
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">

                    <div id="herosvg1">
                        <object data="{{ asset('img/TakingcareoftheEarth.svg') }}" type="image/svg+xml"></object>
                    </div>

                    <div id="herosvg2">
                        <object data="{{ asset('img/TakingcareoftheEarth.svg') }}" type="image/svg+xml"></object>
                    </div>
                </div>
            </div>
        </section>
        <!-- End #hero -->

        {{-- <div class="background">
    <img src="{{asset ('img/greyvector.svg')}}" alt="background-effects">
  </div> --}}
        <!-- Proteção ambietal-->

        <div class="indexContentwrapper">
            <section class="container hidden2" id="protecaoAmbiental">
                <div class="row">
                    <div class="col-md-6 order-md-1 order-sm-1">
                        <div class="protecaoProj" id="protecaoProjIdent1">
                            <h5>Caranguejeira<span>2022</span></h5>
                        </div>
                        <div class="protecaoProj" id="protecaoProjIdent2">
                            <h5>Pedrógão grande<span>2019</span></h5>
                        </div>
                        <div class="protecaoProj" id="protecaoProjIdent3">
                            <h5>Pinhal de Leiria<span>2016</span></h5>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-sm-2" id="protecaoAmbientalinfo">
                        <span>Atualizado a 12-11-2023</span>
                        <h1>Proteção Ambiental</h1>
                        <h4>Os projetos da associação estão destinados aos mais necessitados, as maiores tragédias de
                            deflorestação é o ponto mais importante para nós. Temos objetivos definidos para que estes
                            acontecimentos sejam cada vez menos frequentes.
                        </h4>
                    </div>
                </div>
            </section>
        </div>
        <!-- End Proteção ambietal-->


        <!-- Impacto social -->
        <section class="container hidden" id="impactosocial">
            <div class="row">
                <div class="col-md-6" id="impactosocialinfo">
                    <h1>Impacto social</h1>
                    <h4 id="infoinfo">
                        Na AEPA, não só plantamos árvores como cultivamos um impacto social duradouro. Cada ação nossa ecoa
                        na comunidade, promovendo consciência ambiental e transformando vidas.
                    </h4>
                </div>
                <div class="col-md-6 video">
                    <video controls src="{{ asset('img/videos/AEPA.mp4') }}" width="550" height="340" autoplay muted
                        style="margin-top: 100px;"></video>
                </div>
            </div>
        </section>
    </div>
        <!-- End Impacto social -->
        <section class="container hidden2" id="QA">
            <div class="row">
                <div class="col-md-6">
                    <object data="{{ asset('img/QA.svg') }}" type="image/svg+xml"></object>
                </div>
                <div class="col-md-6">
                    <div class="QAtitle">
                        <span>Atualizado a 21-11-2023</span>
                        <h1>Q&A Preguntas Frequentes</h1>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Onde são utilizados os fundos das doações?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Os fundos das doações são direcionados para uma variedade de iniciativas ambientais,
                                        incluindo projetos de conservação, educação ambiental e sensibilização, programas de
                                        reflorestação e a implementação de práticas sustentáveis.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Como é que posso participar num evento?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Participar nos nossos eventos é simples! Basta estar atento ao nosso calendário de
                                        eventos, disponível no nosso site e nas redes sociais. Geralmente, as inscrições são
                                        feitas online através de formulários simples que garantem uma fácil participação.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Os eventos são gratuitos?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>A maioria dos nossos eventos é gratuita para o público, como parte do nosso
                                        compromisso em tornar a participação acessível a todos. No entanto, eventos
                                        especiais ou programas específicos podem ter uma pequena taxa associada para cobrir
                                        custos operacionais. Essas informações detalhadas sobre custos, se aplicáveis, serão
                                        sempre claramente comunicadas nas descrições dos eventos e nos materiais de
                                        divulgação.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Como me posso voluntariar?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Para aceder ao processo de voluntariado pode dirigir-se a página do projeto ao qual
                                        se pretende voluntariar, e ai participar no projeto.
                                        Todas a informações necessárias poderão ser encontradas na página principal do
                                        projeto.
                                        Em caso de dúvidas contacte 962145236 ou em projetosaepa@aepa.pt
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->

@endsection
