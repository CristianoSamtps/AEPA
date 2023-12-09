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
});
