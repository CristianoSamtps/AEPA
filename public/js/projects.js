$(document).ready(function () {
    // Projetos Visíveis Inicialmente
    var projetosVisiveis = 9;

    // Esconder projetos além dos projetos iniciais
    $('.project:gt(' + (projetosVisiveis - 1) + ')').hide();

    // Verificar se há menos de 10 projetos inicialmente
    if ($('.project').length < 10) {
        // Se não, esconder o botão "Mostrar Mais"
        $('#showMoreBtn').hide();
    }

    // Evento de clique ao botão "Mostrar Mais"
    $('#showMoreBtn').click(function () {
        // Mostrar mais 3 em 3 projetos
        projetosVisiveis += 3;

        // Mostra os próximos 3 projetos
        $('.project:lt(' + projetosVisiveis + ')').slideDown();

        // Verificar se todos os projetos estão listados
        if (projetosVisiveis >= $('.project').length) {
            // Se todos os projetos estiverem listados, esconder o botão "Mostrar Mais"
            $(this).hide();
        }

        // Fazer deslizar a página para baixo
        $('html, body').animate({
            scrollTop: $(this).offset().top
        }, 300);
    });
});

// Seleciona o elemento com o id 'preloader'
let preloader = select('#preloader');

if (preloader) {
    // Adiciona um ouvinte de evento que é acionado quando a página é completamente carregada
    window.addEventListener('load', () => {
        // Remove o elemento 'preloader'
        preloader.remove();
    });
}
