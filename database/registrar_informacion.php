<?php   
include "../database/conexion.php";

    $correo=$_POST['correo'];
    $contraseña=$_POST['contraseña'];
    $tipo_usu=$_POST['tipoUsuario'];
    $fecha_registro=$_POST['fechaRegistro'];
    
    $sql2=$bd->prepare("INSERT INTO usuarios(correo,contraseña,tip_user,fech_reg) VALUES (?,?,?,?);");
    $resultado=$sql2->execute([$correo,$contraseña,$tipo_usu,$fecha_registro]);
    
    if($resultado===TRUE){
        header('location: ../html/inicioAdmin.php?mensaje=EnviadoCorrectamente');
    }else{
        header('location: ../html/inicioAdmin.php?mensaje=error');
        exit();
    }


