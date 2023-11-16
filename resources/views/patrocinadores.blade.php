@extends('layouts.master')

@section('title', 'AEPA')

@section('main')

<main id="main">

    <section class="patrocinadores">

        <div class="container" id="section1">
            <div class="row">
                <div class="col-md-6">

                    <div id="imgsecion1">
                        <img src="{{asset ('img/planetpatroc.png')}}" alt="index_animation">
                    </div>

                </div>

                <div class="col-md-6" id="texto">

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

    <div id="section2">

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

    <div id="section3">

        <div class="texto">
            <h1>Nossos Parceiros</h1>

            <p>Conheça e celebre nossos valiosos parceiros, cujo compromisso contribui para o sucesso compartilhado.
                Agradecemos por fazerem parte da nossa jornada e por ajudarem a moldar o futuro com visão e inovação.
            </p>
        </div>
        
        <div class="container">

            <div class="row">

                <div class="col-3">
                    <p>Conheça e celebre nossos valiosos parceiros, cujo compromisso contribui para o sucesso compartilhado.
                        Agradecemos por fazerem parte da nossa jornada e por ajudarem a moldar o futuro com visão e inovação.
                    </p>
                </div>

                <div class="col-3">
                    <p>Conheça e celebre nossos valiosos parceiros, cujo compromisso contribui para o sucesso compartilhado.
                        Agradecemos por fazerem parte da nossa jornada e por ajudarem a moldar o futuro com visão e inovação.
                    </p>
                </div>

                <div class="col-3">
                    <p>Conheça e celebre nossos valiosos parceiros, cujo compromisso contribui para o sucesso compartilhado.
                        Agradecemos por fazerem parte da nossa jornada e por ajudarem a moldar o futuro com visão e inovação.
                    </p>
                </div>

                <div class="col-3">
                    <p>Conheça e celebre nossos valiosos parceiros, cujo compromisso contribui para o sucesso compartilhado.
                        Agradecemos por fazerem parte da nossa jornada e por ajudarem a moldar o futuro com visão e inovação.
                    </p>
                </div>

            </div>
        </div>
    </div>


</main>


@endsection