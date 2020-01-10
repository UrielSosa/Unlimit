window.addEventListener('load', function () {

    let forms = document.querySelectorAll('._addToCart')

    for (form of forms) {
        form.addEventListener('submit', addToCart)
    }

    function addToCart(event) {
        if (typeof this.product_id !== 'undefined') {
            event.preventDefault()
            let request = {
                product_id: this.product_id.value
            }
            fetch('http://localhost:8000/addToCart', {
                method: 'POST',
                body: JSON.stringify(request),
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": this._token.value
                }
            })
                .then(function (response) {
                    return response.json()
                })
                .then(function (data) {
                    if (data) {
                        //console.log(data)
                        let cart = document.getElementById('cart')
                        let count = cart.children[1];
                        count.innerText = "(" + data.count + ")"
                        let message = document.getElementById('modal-message-' + data.product_id)
                        message.classList.remove('d-none')
                        message.classList.add('d-block')
                    } else {
                        location.href = 'http://localhost:8000/login'
                    }
                })
                .catch(function (error) {
                    console.log("The error was: " + error)
                })
        }
    }

})
