@extends('layouts.master')

@section('title', 'AEPA')

@section ('styles')
<link href="{{ asset ('/css/stylepatrocinadores.css') }}" rel="stylesheet">
@endsection

@section('main')


<main id="main">

    <section class="patrocinadores">

        <div class="container" id="section1">
            <div class="row">
                <div class="col-md-6 col-sm-12 hidden">

                    <div id="imgsecion1">
                        <img src="{{asset ('img/planetpatroc.svg')}}" alt="index_animation">
                    </div>

                </div>

                <div class="col-md-6 col-sm-12 hidden2" id="texto">

                    <h1 class"titulo">AEPA Convida-vos a serem <span>nossos parceiros</span></h1>

                    <p>Na AEPA, acreditamos no poder da união e na construção de relações sólidas. Se você compartilha nossa visão e valores,
                        estamos ansiosos para discutir como podemos trabalhar juntos para alcançar objetivos comuns.Nós somos mais do que uma organização; somos uma
                        comunidade comprometida com a excelência, inovação e crescimento.
                        <br>
                        <br>
                        Ao colaborar conosco, você faz parte de uma jornada para criar impacto positivo e duradouro.
                    </p>

                    <a><button class="btn green-btnpatroc">Aderir</button></a>

                </div>
            </div>
        </div>

    </section>

    <section class="background">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2651 1142" fill="none">
            <path d="M296.295 167.481C150.908 131.592 0 0 0 0V514.406C0 514.406 164.711 707.654 333.102 707.654C501.493 707.654 677.246 520.848 914.65 621.152C1152.05 721.457 1428.11 1098.75 1782.37 999.365C2136.64 899.981 2241.54 867.773 2403.49 900.901C2565.44 934.029 2650.09 1142 2650.09 1142V707.654C2650.09 707.654 2677.7 507.044 2428.33 389.255C2178.97 271.467 1883.59 506.124 1690.35 489.56C1497.12 472.996 1164.94 136.193 943.175 89.2619C721.414 42.3304 441.682 203.37 296.295 167.481Z" fill="url(#paint0_linear_20_2)" fill-opacity="0.29" />
            <defs>
                <linearGradient id="paint0_linear_20_2" x1="1325.5" y1="0" x2="1325.5" y2="1142" gradientUnits="userSpaceOnUse">
                    <stop offset="0.0625" stop-color="#4FCD8B" />
                    <stop offset="0.651042" stop-color="#11492B" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>

    </section>

    <div class="hidden2" id="section2">

        <h1>Torne-se nosso parceiro</h1>

        <p>Ao se tornar um parceiro da AEPA, você terá acesso a uma série de benefícios exclusivos. Desde exposição de marca a oportunidades de networking,
            oferecemos um ambiente onde sua organização pode prosperar. Estamos comprometidos em garantir que cada parceria seja uma experiência enriquecedora,
            proporcionando resultados tangíveis para ambas as partes envolvidas.Oferecemos uma variedade de opções de parcerias para atender às diversas necessidades
            e objetivos de nossos parceiros.
            <br><br>
            Seja uma parceria de patrocínio, colaboração em eventos, ou outras formas de cooperação, estamos abertos a explorar oportunidades criativas e personalizadas
            que agreguem valor às duas partes.
        </p>
    </div>

    <section class="background2">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2978 1283" fill="none">
            <path d="M2645.16 1094.84C2808.48 1135.16 2978 1283 2978 1283L2978 705.081C2978 705.081 2792.97 487.974 2603.81 487.974C2414.65 487.974 2217.22 697.844 1950.53 585.156C1683.84 472.467 1373.74 48.5907 975.774 160.246C577.809 271.901 459.97 308.085 278.044 270.867C96.117 233.649 1.01891 -1.61153e-05 1.01891 -1.61153e-05L1.01887 487.974C1.01887 487.974 -29.9914 713.352 250.134 845.684C530.26 978.016 862.069 714.386 1079.14 732.995C1296.21 751.604 1669.37 1129.99 1918.48 1182.72C2167.6 1235.44 2481.84 1054.52 2645.16 1094.84Z" fill="url(#paint0_linear_21_3)" fill-opacity="0.29" />
            <defs>
                <linearGradient id="paint0_linear_21_3" x1="1489" y1="1283" x2="1489" y2="0.000113968" gradientUnits="userSpaceOnUse">
                    <stop offset="0.151042" stop-color="#369B66" />
                    <stop offset="0.520833" stop-color="#11492B" stop-opacity="0" />
                </linearGradient>
            </defs>
        </svg>

    </section>

    <div class="hidden" id="section3">

        <div class="texto">
            <h1>Nossos Parceiros</h1>

            <p>Conheça e celebre nossos valiosos parceiros, cujo compromisso contribui para o sucesso compartilhado.
                Agradecemos por fazerem parte da nossa jornada e por ajudarem a moldar o futuro com visão e inovação.
            </p>
        </div>

        <section class="container" id="sponsors">
            <div class="container">
                <div class="row justify-content-between flex-md-row flex-sm-column">
                    @foreach($patrocinadores as $patrocinador)
                    <div class="col-md-3 sponsercell">
                        <img src="{{ asset('storage/partner_fotos/' . $partner->foto) }}" alt="{{ $patrocinador->name }}">
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

    </div>

    <div class="hidden2" id="section4">

        <div class="texto">
            <h1>Interessado em se juntar a nós?</h1>

            <p>Se você está interessado em explorar uma parceria connosco, preencha o formulário abaixo contato para discutir as possibilidades.
                Estamos abertos a ideias inovadoras e ansiosos para construir relacionamentos sólidos que impulsionem o sucesso mútuo.
            </p>

        </div>

        <div class="container">
            <div class="row input-container">
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>*Nome</label>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>*Email</label>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>Telemóvel</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>Titulo</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input wide">
                        <input type="text" required />
                        <label>Nome da Empresa</label>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="styled-input wide" style="float:right;">
                        <textarea required></textarea>
                        <label>*Mensagem</label>
                    </div>
                </div>

                <div class="col-xs-12 text-center">
                    <div class="btn-lrg submit-btn">Enviar</div>
                </div>

            </div>
        </div>
    </div>


</main>


@endsection
