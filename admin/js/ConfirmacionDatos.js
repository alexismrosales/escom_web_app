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
            if(response == 1)
            {
                document.getElementById("btnGuardar").disabled = true;
                document.getElementById("btnModificar").disabled = true;
                setInterval(function() //LOS DATOS SE CERRARÁN EN UNA HORA
                {
                    
                    location.href="cierredatos.php";
                },7200000);
                
            }
        }
       });
       return false; //Evita que recarge la pagina
    })
});

//GENERACIÓN DEL PDF DE LA BASE DE DATOS --------------------QUEDA PENDIENTE POR VER SI SE MUESTRA DESPUES DE GUARDAR
//Aqui iran las acciones para mandar los datos a la base de datos por php y ajax
 $(document).ready(function () {
    $('#generarPDF').click(function () { 
       var datos = $('#formConfirmado').serialize();
       $.ajax({
        type: "POST",
        url: "php/CreacionPDF.php",
        data: datos,
        success: function (response) {
            alert(response);
        }
       });
       
    });
}); 

