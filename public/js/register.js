window.onload = function (){

  let formulario = document.forms[0];
  let inputs = document.querySelectorAll('input');
  let elementos = formulario.elements;
  let inputNombre = elementos[1];
  let inputApellido = elementos[2];
  let inputEmail = elementos[3];
  let inputContra = elementos[4];
  let inputConfirm = elementos[5];
  let inputTelefono = elementos[6];
  let inputSexo = elementos[7];
  let inputAvatar = elementos[8];
  let botonEnviar = elementos[9];

  let selectProvincia = document.getElementById('pais')
  let divMunicipio = document.getElementById('muncip');

  let errorNomb = document.getElementById('errorNom');
  let errorAp = document.getElementById('errorApe');
  let errorEm = document.getElementById('errorEmail');
  let errorCon = document.getElementById('errorPass');
  let errorConCon = document.getElementById('errorConfPass');
  let errorTel = document.getElementById('errorTel');

  let regexEmail = (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
  let regexContra = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,15}/;
  // let regexContra = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/;
  let error = '';

  formulario.onsubmit = function (e) {
     for (var input of inputs) {
       if(input.getAttribute('class') != 'form-control is-valid'){
         e.preventDefault()
       }
       else{
         formulario.submit();
       }
     }
  }

  inputNombre.onchange = function () {
    if (inputNombre.value.length <= 1) {
      inputNombre.setAttribute('class', 'form-control is-invalid');
      if (errorNomb.textContent == '') {
        let mensajeNomb = document.createTextNode('Nombre muy corto');
        errorNomb.appendChild(mensajeNomb);
      }
    } else {
      inputNombre.setAttribute('class', 'form-control is-valid');
    }
  }

  inputApellido.onchange = function() {
    if (inputApellido.value.length <= 1) {
      inputApellido.setAttribute('class', 'form-control is-invalid');
      if (errorAp.textContent == '') {
        let mensajeAp = document.createTextNode('Apellido muy corto');
        errorAp.appendChild(mensajeAp);
      }
    } else {
      inputApellido.setAttribute('class', 'form-control is-valid');
    }
  }

  inputEmail.onchange = function() {
    if (regexEmail.test(inputEmail.value) == false) {
      inputEmail.setAttribute('class', 'form-control is-invalid');
      if (errorEm.textContent == '') {
        let mensajeEm = document.createTextNode('Email invalido');
        errorEm.appendChild(mensajeEm);
      }
    } else {
      inputEmail.setAttribute('class', 'form-control is-valid');
    }

  }

  inputContra.onchange = function() {
    if (regexContra.test(inputContra.value) == false) {
      inputContra.setAttribute('class', 'form-control is-invalid');
      if (errorCon.textContent == '') {
        let mensajeCon = document.createTextNode('Contraseña invalida');
        errorCon.appendChild(mensajeCon);
      }
    } else {
      inputContra.setAttribute('class', 'form-control is-valid');
    }
  }
  console.log(error);

    inputConfirm.onchange = function() {
      if (inputContra.value != inputConfirm.value) {
        inputConfirm.setAttribute('class', 'form-control is-invalid');
        if (errorConCon.textContent == '') {
          let mensajeConCon = document.createTextNode('Contraseñas no coinciden');
          errorConCon.appendChild(mensajeConCon);
        }
      } else {
        inputConfirm.setAttribute('class', 'form-control is-valid');
      }
    }

    inputTelefono.onchange = function() {
      if (inputTelefono.lenght <= 10) {
        inputConfirm.setAttribute('class', 'form-control is-invalid');
        if (errorTel.textContent == '') {
          let mensajeTel = document.createTextNode('Telefono invalido');
          errorTel.appendChild(mensajeTel);
        }
      } else {
        inputTelefono.setAttribute('class', 'form-control is-valid');
      }
    }

    inputSexo.onchange = function() {
        inputSexo.setAttribute('class', 'form-control is-valid');
    }

    inputAvatar.onchange = function() {
        inputAvatar.setAttribute('class', 'form-control is-valid');
    }


  // Armado de SELECT

  function mostrarPaises(){

    fetch("https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre")
      .then(function(respuesta){
        return respuesta.json();
      })
      .then(function(data){
        for (provincia of data.provincias) {
          var optionPais = document.createElement('option');
          var textoPais = document.createTextNode(provincia.nombre);
          optionPais.appendChild(textoPais);
          optionPais.setAttribute('value', provincia.id)
          selectProvincia.appendChild(optionPais);
        }
      })
  }
  mostrarPaises();

  var provinciaSeleccionada = 'nada';

  function provinciaSelecc(){
    provinciaSeleccionada = selectProvincia.options[selectProvincia.selectedIndex].value;
    return provinciaSeleccionada;
  }


  function mostrarMunicipios(provincia){
    fetch("https://apis.datos.gob.ar/georef/api/municipios?provincia="+provincia+"&campos=id,nombre&max=100")
      .then(function(respuesta){
        return respuesta.json();
      })
      .then(function(data){
        var selectMunicipio = document.createElement('select');
        selectMunicipio.setAttribute('class', 'form-control');
        selectMunicipio.name = 'municipios';
        selectMunicipio.id = 'municipios';
        divMunicipio.appendChild(selectMunicipio);
        var opcionSeleccionar = document.createElement('option');
        selectMunicipio.appendChild(opcionSeleccionar);
        opcionSeleccionar.innerHTML = "<option>Seleccionar</option>";
        for (municipio of data.municipios) {
          var optionMunicipio = document.createElement('option');
          optionMunicipio.value = municipio.id;
          optionMunicipio.innerHTML = municipio.nombre;
          selectMunicipio.appendChild(optionMunicipio);
        }
      })
  }

  selectProvincia.addEventListener('change', function(){
    provinciaSelecc()
    mostrarMunicipios(provinciaSeleccionada);
    var selecMun = document.getElementById('municipios');
    // selecMun.remove();
  })

divMunicipio.setAttribute('class', 'form-group');
console.log(divMunicipio);
}
