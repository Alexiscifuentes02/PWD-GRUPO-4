function validar(){
    var resultado = true;
    var archivo = document.getElementById('archivo').files[0];

    if(!archivo) {
        alert("Debe seleccionar un archivo.");
        resultado = false;
    }else{
        var validos = [
            'application/pdf',
            'application/msword'
        ];

        if (!validos.includes(archivo.type)) {
            alert("Solo se permiten archivos .doc o .pdf");
            resultado = false;
        }

        if (archivo.size > 2 * 1024 * 1024) {
            alert("El archivo no puede superar los 2MB");
                resultado = false;
        }
    }
    return resultado; 
}
