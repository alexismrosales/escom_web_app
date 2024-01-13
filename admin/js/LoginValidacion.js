$(document).on('submit','#form-login',function(event){
      event.preventDefault();
     
       var datos = $('#form-login').serialize();
       $.ajax({
        type: "POST",
        url: "php/loginvalidacion.php",
        datatype: "json",
        data: datos,
        success: function (response) {
            console.log('Inicio de conexion...');
            //EN caso que no sea valido sería devolver algo que imprioma
        }
       })
       .done(function(respuesta){
        var valores = $.parseJSON(respuesta);

          //EN CASO QUE YA ESTE DESPLEGADO EL ERROR SE MOSTRARÁ
        if(!valores.error)
        {
          ocultarError();
          console.log('ESTOY DENTRO'); 
          location.href="dashboard.php?usuario="+valores.usuario;
        }
        else{
          desplegarError();
          console.log('NO ESTOY DENTRO');
        }
      })
      .fail(function(resp){
        console.log(resp.responseText);
      })
      .always(function()
      {
        console.log("Completado...");
      });
});


function desplegarError() {
  var x = document.getElementById("error");
    x.style.display = "block";
}
function ocultarError() {
  var x = document.getElementById("error");
    x.style.display = "none";
}
