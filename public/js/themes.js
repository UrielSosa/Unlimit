window.onload = function(){
  let body = document.getElementById("bodybg");
  let header = document.getElementById("header");
  let footer = document.getElementById("footer");
  let cambiarFondo =  document.getElementById("cambiarFondo");
  let product = document.getElementById("productos");
  console.log(product);
  cambiarFondo.addEventListener("click", function(){
    if (footer.style.background !== "gray") {
      body.style.background = "linear-gradient(to left, #948E99, #2E1437)";
      header.style.background = "linear-gradient(to bottom, #2c3e50, #bdc3c7)";
      footer.style.background = "gray";
      product.style.background ="background-color: rgba(136, 71, 33, 0.3)";
    }else {
      body.style.background = "linear-gradient(to bottom, #abbaab, #ffffff)";
      header.style.background = "linear-gradient(to bottom, #8a493d, #521a1f)";
      footer.style.background = "linear-gradient(to bottom, #8a493d, #521a1f)";
      product.style.background = "background-color: rgba(246, 246, 246, 0.3)";
    }
})


  // cambiar_fondo(header)
}
