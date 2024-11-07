function toggleFields() {
    const serviceType = document.getElementById('serviceType').value;
    const sellerFields = document.querySelector('.seller-fields');
    const buyerFields = document.querySelector('.buyer-fields');

    sellerFields.classList.remove('active');
    buyerFields.classList.remove('active');

    switch (serviceType) {
        case 'sell':
            sellerFields.classList.add('active');
            break;
        case 'buy':
            buyerFields.classList.add('active');
            break;
        default:
            break;
    }
}

$(document).on('click', '.trigger-btn', function () {
    $('#quotationModal').modal('show');
});
