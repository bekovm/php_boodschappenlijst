const quantityInputs = document.querySelectorAll('.quantity');
const totalPriceElement = document.querySelector('#totalPrice');

function updatePrices() {
    let totalPrice = 0;

    quantityInputs.forEach((input) => {
        const row = input.closest('tr');
        const price = Number(row.querySelector('.price').textContent);
        const quantity = Number(input.value) || 0;
        const subTotal = price * quantity;

        row.querySelector('.subTotal').textContent = subTotal.toFixed(2);
        totalPrice += subTotal;
    });

    totalPriceElement.textContent = totalPrice.toFixed(2);
}

quantityInputs.forEach((input) => {
    input.addEventListener('input', updatePrices);
});
