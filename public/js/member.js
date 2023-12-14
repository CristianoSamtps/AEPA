document.addEventListener('DOMContentLoaded', function () {
    var faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(function (question) {
      question.addEventListener('click', function () {
        var targetId = this.getAttribute('data-target');
        var answer = document.querySelector(targetId);

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
});
