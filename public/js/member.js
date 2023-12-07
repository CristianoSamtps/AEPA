document.addEventListener('DOMContentLoaded', function () {
    // Get all the faq-question elements
    var faqQuestions = document.querySelectorAll('.faq-question');

    // Add a click event listener to each question
    faqQuestions.forEach(function (question) {
      question.addEventListener('click', function () {
        // Get the target answer's ID from the data-target attribute
        var targetId = this.getAttribute('data-target');
        var answer = document.querySelector(targetId);

        // Toggle the collapse class on the target answer
        if (answer.classList.contains('collapse')) {
          answer.classList.remove('collapse');
          this.querySelector('i').classList.add('fa-chevron-up');
          this.querySelector('i').classList.remove('fa-chevron-down');
        } else {
          answer.classList.add('collapse');
          this.querySelector('i').classList.remove('fa-chevron-up');
          this.querySelector('i').classList.add('fa-chevron-down');
        }
      });
    });

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
