 
var form = this.document.getElementById('search');

        form.addEventListener("submit", (e) => {
            e.preventDefault();
            if ("http://localhost:8000/login" == document.URL || document.URL == "http://localhost:8000/register") {
                swal("Para buscar necesitas estar logueado!!");
            } else {
                swal({ title: "Para buscar necesitas estar logueado!!" });
            }
        })