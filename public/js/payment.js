document.addEventListener('DOMContentLoaded', function() {
    // Selecione todos os botões dentro do div com a classe 'text-center mb-3'
    var buttons = document.querySelectorAll('.text-center.mb-3 button');

    // Adicione um evento 'click' a cada botão
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Remova a classe 'btn-success' de todos os botões
            buttons.forEach(function(btn) {
                btn.classList.remove('btn-success');
            });
            // Adicione a classe 'btn-success' ao botão clicado
            this.classList.add('btn-success');
        });
    });
});
