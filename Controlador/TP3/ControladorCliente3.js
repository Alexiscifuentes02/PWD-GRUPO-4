(function () {
  "use strict";

  var form = document.getElementById("formPelicula");

  form.addEventListener("submit", function (event) {
    var esValido = form.checkValidity();
    form.classList.add("was-validated");

  
    var archivoInput = document.getElementById("archivo");
    var archivo = archivoInput.files[0];
    if (!archivo) {
      esValido = false;
    } else {
      var validos = ["image/jpeg", "image/png"];
      if (!validos.includes(archivo.type) || archivo.size > 2 * 1024 * 1024) {
        esValido = false;
      }
    }

    if (!esValido) {
      event.preventDefault();  
      event.stopPropagation();
    }
  });
})();
