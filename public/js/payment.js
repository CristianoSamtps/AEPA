document.addEventListener('DOMContentLoaded', function() {
    // Esconde todos os cartões exceto o cartão de crédito
    hideAllPaymentCards();
    document.getElementById('cartao').style.display = 'block';

    // Seleciona todos os botões de método de pagamento
    document.querySelectorAll('.pagamento .btn').forEach(function(button) {
        button.addEventListener('click', function() {
            // Remove a classe 'btn-success' de todos os botões
            document.querySelectorAll('.pagamento .btn').forEach(function(btn) {
                btn.classList.remove('btn-success');
            });
            // Adiciona a classe 'btn-success' ao botão clicado
            this.classList.add('btn-success');

            // Esconde todos os cartões
            hideAllPaymentCards();

            // Mostra o cartão correspondente ao botão clicado
            const method = this.textContent.trim(); // 'Cartão', 'Apple Pay', 'MBWay', 'PayPal'
            showPaymentCard(method);
        });
    });

    function hideAllPaymentCards() {
        document.querySelectorAll('.pagamento .card').forEach(function(card) {
            card.style.display = 'none';
        });
    }

    function showPaymentCard(method) {
        let cardId = '';
        switch(method) {
            case 'Cartão':
                cardId = 'cartao';
                break;
            case 'Apple Pay':
                cardId = 'applePay';
                break;
            case 'MBWay':
                cardId = 'mbWay';
                break;
            case 'PayPal':
                cardId = 'payPal';
                break;
        }
        if (cardId) {
            document.getElementById(cardId).style.display = 'block';
        }
    }


});
