document.addEventListener('DOMContentLoaded', function() {
    let input = document.getElementById('quantity_input')
    let text = document.getElementById('total_price')
    let price = document.getElementById('price').value
    input.addEventListener('input', function() {
        text.innerHTML = `IDR ${(input.value * price).toLocaleString('id-ID', {groupingSeparator: '.'})}`
    })
})
