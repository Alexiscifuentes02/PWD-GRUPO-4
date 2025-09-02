(function(){
    'use strict';
    var form = document.getElementById('formulario');
    var claveInput = document.getElementById('clave');
    var usuarioInput = document.getElementById('usuario');
    var claveFeedback = document.getElementById('claveFeedback');

    form.addEventListener('submit', function(event){
        var usuario = usuarioInput.value.trim();
        var contraseña = claveInput.value.trim();

        var regex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
        var isValid = true;

    
        if (!form.checkValidity()) {
            isValid = false;
        }

        if (!regex.test(contraseña) || contraseña === usuario) {
            claveInput.classList.add('is-invalid');
            claveInput.classList.remove('is-valid');
            claveFeedback.style.display = 'block';
            isValid = false;
        } else {
            claveInput.classList.remove('is-invalid');
            claveInput.classList.add('is-valid');
            claveFeedback.style.display = 'none';
        }

        if (!isValid) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    }, false);
})();
