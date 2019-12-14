window.onload = function(){
    let inp = this.document.getElementById('inputB');
    let buscar = this.document.getElementById('buscar');

    inp.addEventListener('click', function(){
        buscar.style.display = 'none';
    })
} 
