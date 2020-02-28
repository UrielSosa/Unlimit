window.onload = () => {
    if ("http://localhost:8000/login" != document.URL && document.URL != "http://localhost:8000/register") {
        const change = document.getElementById("cambiarFondo");
        const body = document.getElementById("body");
        const header = document.getElementById("header");
        const footer = document.getElementById("footer");
        const productos = document.getElementsByClassName("prodcard");
        const cloud = document.getElementsByClassName("fa-cloud");
    
    const normalTheme = {
        status: true,
        toggler: function () {
            body.style.background = "#46ACCD";
            header.style.background = "#232F3E";
            footer.style.background = "#232F3E";
            for (producto of productos) {
                producto.style.background = "#232F3E";
                producto.style.color = "white";
            }
            for (nube of cloud) {
                nube.style.color = "#46ACCD";
            }
            this.status = true;
            greyTheme.status = false;
        }
    }
    const greyTheme = {
        status: false,
        toggler: function(){
            body.style.background = "#232F3E";
            header.style.background = "#46ACCD";
            footer.style.background = "#46ACCD";
            for (nube of cloud) {
                nube.style.color = "white";
            }
            for (producto of productos) {
                producto.style.background = "white";
                producto.style.color = "black"
            }
            this.status = true;
            normalTheme.status = false;
        }
    }


    normalTheme.toggler();

    change.addEventListener('click', () => {
        if (greyTheme.status) {
            normalTheme.toggler();
        } else {
            greyTheme.toggler();
        }
    })
}
}