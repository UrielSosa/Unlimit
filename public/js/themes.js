window.onload = function(){
  let body = document.getElementById("bodybg");
  let header = document.getElementById("header");
  let footer = document.getElementById("footer");
  let cambiarFondo = document.getElementById("cambiarFondo");
  let estilo = document.getElementsByTagName("link")[4];
  let productos = document.getElementsByClassName("prodcard");
  let botones = document.getElementsByTagName('div')[11].getElementsByTagName('a');

  cambiarFondo.addEventListener("click", function(){
    if (footer.style.background !== "gray") {
      body.style.background = "linear-gradient(to left, #232526, #414345)";
      header.style.background = "gray";
      footer.style.background = "gray";
      for (producto of productos) {
        producto.style.background = "rgba(126, 63, 54, 0.4)";
      }
      for (boton of botones) {
        // boton.style.color = "#fff";
        boton.setAttribute('class', 'btn boton-gris mr-3');
      }
    }else {
      body.style.background = "linear-gradient(to bottom, #abbaab, #ffffff)";
      header.style.background = "linear-gradient(to bottom, #8a493d, #521a1f)";
      footer.style.background = "linear-gradient(to bottom, #8a493d, #521a1f)";

      for (producto of productos) {
        producto.style.background = "rgba(136, 71, 33, 0.3)";
      }
      for (boton of botones) {
        boton.setAttribute('class', 'btn boton-celes mr-3');
      }
    }
})


}
