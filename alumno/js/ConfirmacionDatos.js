 //Aqui iran las acciones para mandar los datos a la base de datos por php y ajax
//ENVIO DE DATOS A LA BASE DE DATOS

$(document).ready(function () {
    $('#btnGuardar').click(function () { 
       var datos = $('#formConfirmado').serialize();
       $.ajax({
        type: "POST",
        url: "php/EnvioDatos.php",
        data: datos,
        success: function (response) {
            console.log(response);
                document.getElementById("generarPDF").style.display = "block";
                document.getElementById("btnGuardar").disabled = true;
                document.getElementById("btnModificar").disabled = true;
            if(response == 1)
            {   
                
                
                setInterval(function() //LOS DATOS SE CERRARÁN EN UNA HORA
                {
                    location.href="cierredatos.php";
                },7200000);
                
            }
        }
       })
       .always(function()
       {
        console.log("realizado...");
       });
       return false; //Evita que recarge la pagina
    })
});


 //ENVIO DE EMAIL DE CONFIRMACION
$(document).ready(function () {
  $('#btnGuardar').click(function () {     
       var datos = $('#formConfirmado').serialize();
       $.ajax({
        type: "POST",
        url: "php/EmailConfirmacion.php",
        data: datos,
         success: function (response) {
             console.log("Exito"+response);
         }
        });
       
     });
 });  
//GENERACIÓN DEL PDF DE LA BASE DE DATOS --------------------QUEDA PENDIENTE POR VER SI SE MUESTRA DESPUES DE GUARDAR
//Aqui iran las acciones para mandar los datos a la base de datos por php y ajax
 $(document).ready(function () {
    $('#generarPDF').click(function () { 
       var datos = $('#formConfirmado').serialize();
        location.href="php/generarPDF.php";
    });
});  

//Puerto 587