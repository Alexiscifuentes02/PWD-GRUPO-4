function validar(){
    var resultado = true;
    var archivo = document.getElementById('archivo').files[0];

    if (!archivo) {
        alert("Debe seleccionar un archivo.");
        resultado = false;
    }else{
        var validos = ['text/plain'];            

        if(!validos.includes(archivo.type)) {
            alert("Solo se permite archivo .txt");
            resultado = false;
        }

        if (archivo.size > 2 * 1024 * 1024){
            alert("El archivo no puede superar los 2MB");
            resultado = false;
        }
    }    
    return resultado;
}