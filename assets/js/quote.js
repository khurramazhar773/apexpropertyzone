function toggleFields() {
    const serviceType = document.getElementById('serviceType').value;
    const sellerFields = document.querySelector('.seller-fields');
    const buyerFields = document.querySelector('.buyer-fields');

    if (serviceType === 'sell') {
        sellerFields.classList.add('active');
        buyerFields.classList.remove('active');
    } else if (serviceType === 'buy') {
        buyerFields.classList.add('active');
        sellerFields.classList.remove('active');
    } else {
        sellerFields.classList.remove('active');
        buyerFields.classList.remove('active');
    }
}
$(document).on('click', '.trigger-btn', function () {
    $('#quotationModal').modal('show');
});
