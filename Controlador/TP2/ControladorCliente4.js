(function (){
  "use strict";

  var form = document.getElementById("formPelicula");

  form.addEventListener("submit",function (event){
      var esValido = true;

      if (!form.checkValidity()) {
        esValido = false;
      }

      form.classList.add("was-validated");
  
    if(!esValido){
      event.preventDefault();
      event.stopPropagation();
    }
    return $esValido;
  });false
})();
