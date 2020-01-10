window.addEventListener('load', function () {

    //si se modifica la cantidad de un producto en el carrito
    let quantities = document.querySelectorAll('._quantity')

    for (quantity of quantities) {
        quantity.addEventListener('change', changeQuantity)
    }

    function changeQuantity() {
        let form = this.parentElement
        if ((typeof form.product_id !== 'undefined') && (typeof form.quantity !== 'undefined')) {
            let request = {
                product_id: form.product_id.value,
                quantity: form.quantity.value
            }
            fetch('http://localhost:8000/changeQuantity', {
                method: 'PUT',
                body: JSON.stringify(request),
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": form._token.value
                }
            })
                .then(function (response) {
                    return response.json()
                })
                .then(function (data) {
                    if (data) {
                        //console.log(data);
                        let subPrice = document.getElementById('quantity' + data.product_id)
                        subPrice.innerText = '$' + data.subPrice
                        let totalPrice = document.getElementById('totalPrice')
                        totalPrice.innerText = 'Total: $' + data.totalPrice
                    }
                })
                .catch(function (error) {
                    console.log("The error was: " + error)
                })
        }
    }

    //si se quiere eliminar del carrito un producto
    let deleteOrders = document.querySelectorAll('._deleteOrder')

    for (order of deleteOrders) {
        order.addEventListener('click', deleteOrder)
    }

    function deleteOrder() {
        let form = this.parentElement
        if ((typeof form.product_id !== 'undefined')) {
            let request = {
                product_id: form.product_id.value
            }
            fetch('http://localhost:8000/deleteOrder', {
                method: 'DELETE',
                body: JSON.stringify(request),
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": form._token.value
                }
            })
                .then(function (response) {
                    return response.json()
                })
                .then(function (data) {
                    if (data) {
                        //elimino el pedido de la vista
                        let divOrder = document.getElementById('div' + data.product_id)
                        let order = divOrder.children
                        divOrder.removeChild(order[0])
                        //modifico la cantidad de productos que quedaron en el pedido
                        let cart = document.getElementById('cart')
                        let count = cart.children[1];
                        count.innerText = "(" + data.count + ")"
                        //muestro el precio total de todos los productos que quedaron
                        let totalPrice = document.getElementById('totalPrice')
                        totalPrice.innerText = 'Total: $' + data.totalPrice
                    } else {
                        location.href = 'http://localhost:8000/'
                    }
                })
                .catch(function (error) {
                    console.log("The error was: " + error)
                })
        }
    }

})
