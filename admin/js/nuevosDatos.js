$(document).ready(function () {
    $('#btnGuardar').click(function () { 
       var datos = $('#formConfirmado').serialize();
       $.ajax({
        type: "POST",
        url: "agregarvalidacion.php",
        data: datos,
        success: function (response) {
            if(response == 1)
            {
                document.getElementById("btnPDF").style.display = "block";
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