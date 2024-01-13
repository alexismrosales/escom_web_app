<?php
    session_start();
    include "conexionBD.php";
    //DATOS POR POST                                                                                                                            
    $user = $_POST['usuario'];
    $pass = $_POST['password'];
    $_SESSION['usuario'] = $user;
                                                                                          
    $query_datos = "SELECT * FROM `usuario` WHERE usuario='$user' AND contrasena='$pass';";
    $resultado = mysqli_query($conexion, $query_datos);
    if(mysqli_num_rows($resultado) == 1)
    {
        $datos = mysqli_fetch_assoc($resultado);
        if($datos['usuario'] && $datos['contrasena'])
        {
            
            $not_success = false;
            $arr = array('error' => $not_success, 'usuario' => $user);
            echo json_encode($arr);
            exit();
        }
    }
    else{
        $success = true;
        $arr = array('error' => $success);
        echo json_encode($arr);
        exit();
    }
?>