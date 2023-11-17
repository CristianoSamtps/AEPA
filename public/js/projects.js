$(document).ready(function () {
    // Esconder inicialmente a quarta linha de projetos
    $('.project-row-4').hide();

    // Adicionar evento de clique ao botão "Mostrar Mais"
    $('#showMoreBtn').click(function () {
        // Mostrar a quarta linha de projetos
        $('.project-row-4').slideToggle();

        // Esconder o botão quando a .project-row-4 é mostrada
        $(this).toggle();

        // Fazer deslizar a página para a .project-row-4
        $('html, body').animate({
            scrollTop: $('.project-row-4').offset().top
        }, 400);
    });
});
