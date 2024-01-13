
//Bootstrap script para la validación del form
(function () {
  'use strict'

  var forms = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

//Obteniendo la información del form
//Se necesita de php para pasar la informacion por el metodo post


$(document).on('submit','#formulario',function (event) {
  event.preventDefault();
     var datos = $('#formulario').serialize();
     $.ajax({
      type: "POST",
      url: "verificacionboleta.php",
      data: datos,
      success: function () {
        console.log("Conexion exitosa...");
      }
     })
     .done(function(respuesta)
     {    
          var valores = $.parseJSON(respuesta);
          console.log(valores.error); 
          if(valores.error)
          {
              alert("Ya existe la boleta");
              $('#grupo_boleta').addClass('formulario_grupoIncorrecto').removeClass('formulario_grupoCorrecto');                                     
          }
          else{
            location.href="ConfirmacionDatos.php";
          }
     })
    .always(function()
    {
      console.log("Completado...");
    });

  });

