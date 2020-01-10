window.onload = () => {
    if ("http://localhost:8000/login" != document.URL && document.URL != "http://localhost:8000/register") {
    const change = document.getElementById("cambiarFondo");
    const body = document.getElementById("bodybg");
    const header = document.getElementById("header");
    const footer = document.getElementById("footer");
    const productos = document.getElementsByClassName("prodcard");
    
    const normalTheme = {
        status: true,
        toggler: function () {
            body.style.background = "linear-gradient(to bottom, #abbaab, #ffffff)";
            header.style.background = "linear-gradient(to bottom, #8a493d, #521a1f)";
            footer.style.background = "linear-gradient(to bottom, #8a493d, #521a1f)";
            for (producto of productos) {
                producto.style.background = "rgba(136, 71, 33, 0.3)";
            }
            this.status = true;
            greyTheme.status = false;
        }
    }
    const greyTheme = {
        status: false,
        toggler: function(){
            body.style.background = "linear-gradient(to left, #232526, #414345)";
            header.style.background = "gray";
            footer.style.background = "gray";
            for (producto of productos) {
                producto.style.background = "rgba(126, 63, 54, 0.4)";
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