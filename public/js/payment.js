document.addEventListener('DOMContentLoaded', function() {

    hideAllPaymentCards();
    document.getElementById('cartao').style.display = 'block';

    document.querySelectorAll('.pagamento .btn').forEach(function(button) {
        button.addEventListener('click', function() {
            document.querySelectorAll('.pagamento .btn').forEach(function(btn) {
                btn.classList.remove('btn-success');
            });
            this.classList.add('btn-success');

            hideAllPaymentCards();

            const method = this.textContent.trim();
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
