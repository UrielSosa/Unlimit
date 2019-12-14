window.onload = function(){
  let body = document.getElementById("bodybg");
  let header = document.getElementById("header");
  let cambiarFondo =  document.getElementById("cambiarFondo");
  cambiarFondo.addEventListener("click", function(){
    if (header.style.background !== "black") {
      body.style.background = "linear-gradient(to bottom, #004e92, #000428)";
      header.style.background = "black";
    }else {
      body.style.background = "linear-gradient(to left, #FFFDE4, #005AA7)";
      header.style.background = "linear-gradient(to bottom, #8a493d, #521a1f)";
    }

  })


  // cambiar_fondo(header)
}
