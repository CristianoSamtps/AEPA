@extends('layouts.master')

@section('title', 'AEPA | Projetos')

@section('styles')
    <link href="{{ asset('/css/projects.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
@endsection

@section('main')
    <div class="projects-section">

        <!-- Título "Projetos" -->
        <h1 id="projects-title">Projetos</h1>

        <!-- Listagem de Projetos -->
        <div class="projects-list">

            <!-- Primeira fila de Projetos -->
            <div class="project-row project-row-1 hidden">

                <!-- Projeto 1 -->
                <div class="project">
                    <a href="{{ route('project_detail1') }}">
                        <h3>Serra da Estrela, Portugal</h3>
                        <p>Plantar árvores em áreas desflorestadas para promover a biodiversidade e reduzir a pegada de
                            carbono.
                        </p>
                        <h2>Projeto de Reflorestação "Verdejante"</h2>
                        <img src="{{ asset('img/Cidades/Verdejante.jpg') }}" alt="Verdejante">
                    </a>
                </div>

                <!-- Projeto 2 -->
                <div class="project">
                    <a href="{{ route('project_detail2') }}">
                        <h3>Rio Douro, Porto, Portugal</h3>
                        <p>Preservação dos ecossistemas aquáticos através da limpeza dos rios e sensibilização para a
                            poluição
                            da água.</p>
                        <h2>Campanha “Rios Limpos”</h2>
                        <img src="{{ asset('img/Cidades/Rios Limpos.jpg') }}" alt="Verdejante">
                    </a>
                </div>

                <!-- Projeto 3 -->
                <div class="project">
                    <h3>Lisboa, Portugal</h3>
                    <p>Criação de programas educativos locais para sensibilizar as crianças para práticas sustentáveis.</p>
                    <h2>Iniciativa “Educar para Sustentabilidade”</h2>
                    <img src="{{ asset('img/Cidades/Educar para Sustentabilidade.jpg') }}" alt="Verdejante">
                </div>

            </div>

            <!-- Segunda fila de Projetos -->
            <div class="project-row project-row-2 hidden2">

                <!-- Projeto 4 -->
                <div class="project">
                    <h3>Parque Nacional da Peneda-Gerês, Portugal</h3>
                    <p>Criação de habitats naturais, com caixas-ninho e áreas de alimentação, para promover a biodiversidade
                        local.</p>
                    <h2>Projeto “Habitat Harmonioso”</h2>
                    <img src="{{ asset('img/Cidades/Habitat Harmonioso.jpg') }}" alt="Verdejante">
                </div>

                <!-- Projeto 5 -->
                <div class="project">
                    <h3>Braga, Portugal</h3>
                    <p>Redução desperdício via parcerias com supermercados que distribuiem alimentos a comunidades carentes.
                    </p>
                    <h2>Iniciativa “Zero Desperdício”</h2>
                    <img src="{{ asset('img/Cidades/Zero Desperdício.jpg') }}" alt="Verdejante">
                </div>

                <!-- Projeto 6 -->
                <div class="project">
                    <h3>Porto, Portugal</h3>
                    <p>Promoção da moda sustentável, incentivando a produção e compra de vestuário feito de materiais
                        reciclados.</p>
                    <h2>Programa “Eco-Moda”</h2>
                    <img src="{{ asset('img/Cidades/Eco-Moda.jpg') }}" alt="Verdejante">
                </div>

            </div>

            <!-- Terceira fila de Projetos -->
            <div class="project-row project-row-3 hidden2">

                <!-- Projeto 7 -->
                <div class="project">
                    <h3>Aveiro, Portugal</h3>
                    <p>Instalação de painéis solares em escolas, promovendo energia limpa e sensibilizando as energias
                        renováveis.</p>
                    <h2>Projeto “Energia Solar nas Escadas”</h2>
                    <img src="{{ asset('img/Cidades/Energia Solar nas Escadas.jpg') }}" alt="Verdejante">
                </div>

                <!-- Projeto 8 -->
                <div class="project">
                    <h3>Coimbra, Portugal</h3>
                    <p>Parcerias locais criam espaços verdes urbanos, promovendo ar puro e áreas sustentáveis de lazer.</p>
                    <h2>Iniciativa “Cidades Verdes”</h2>
                    <img src="{{ asset('img/Cidades/Cidades Verdes.jpg') }}" alt="Verdejante">
                </div>

                <!-- Projeto 9 -->
                <div class="project">
                    <h3>Faro, Portugal</h3>
                    <p>Sensibilização para a redução da utilização de plástico, promovendo a reciclagem e alternativas
                        ecológicas.</p>
                    <h2>Campanha “Zero Plástico”</h2>
                    <img src="{{ asset('img/Cidades/Zero Plástico.jpg') }}" alt="Verdejante">
                </div>

            </div>

            <!-- Botão Mostrar Mais Projetos -->
            <div id="MoreBtn">
                <button id="showMoreBtn">Mostrar Mais</button>
            </div>

            <!-- Quarta fila de Projetos (Projetos AEPA (Index)) -->
            <div class="project-row project-row-4">

                <!-- Projeto 10 -->
                <div class="project">
                    <h3>Pinhal de Leiria, Portugal</h3>
                    <p>Plantamos árvores, promovendo a biodiversidade e reduzindo a pegada de carbono para um ambiente
                        verde.</p>
                    <h2>Projeto “Reflorestação Ambiciosa”</h2>
                    <img src="{{ asset('img/Cidades/Reflorestação Ambiciosa.jpg') }}" alt="Reflorestação Ambiciosa">
                </div>

                <!-- Projeto 11 -->
                <div class="project">
                    <h3>Caranguejeira, Portugal</h3>
                    <p>A tua ajuda é crucial para restaurar ecossistemas locais e promover a sustentabilidade ambiental.</p>
                    <h2>Projeto “Recuperação Vital”</h2>
                    <img src="{{ asset('img/Cidades/Recuperação Vital.jpg') }}" alt="Recuperação Vital">
                </div>

                <!-- Projeto 12 -->
                <div class="project">
                    <h3>Pedrógão Grande, Portugal</h3>
                    <p>Junta-te a nós na missão sustentável, apoiando práticas inovadoras para fortalecer o ambiente.</p>
                    <h2>Projeto “Evolução Sustentável”</h2>
                    <img src="{{ asset('img/Cidades/Evolução Sustentável.jpg') }}" alt="Evolução Sustentável">
                </div>

            </div>
        </div>
    </div>

    <!-- Ficheiros JavaScript !-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/projects.js') }}"></script>

@endsection
