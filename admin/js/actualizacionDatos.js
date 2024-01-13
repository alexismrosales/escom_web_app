$(document).ready(function () {
    $('#enviar-datos').click(function () { 
       var datos = $('#formulario_update').serialize();
       $.ajax({
        type: "POST",
        url: "php/updatevalidacion.php",
        data: datos,
        success: function (response) {
                console.log("Datos insertados"+response);
                alert("Datos actualiazdos correctamente...")
                location.href = "dashboard.php?usuario=user"
        }
       });
       return false; //Evita que recarge la pagina
    })
});