<?php

    require_once "conexion.php";
    require "jwt.php";

    $email = "benito@camelas.com";
    $pass = "123";

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND clave='$pass'";
    //$sql = "SELECT * FROM usuarios";
    $consultas = mysqli_query($conexion,$sql);
    
    $usuario = mysqli_fetch_assoc($consultas);
    

    if($consultas){

        $jwt = new Encrypt();
        $jwt->jwt($usuario['email'],$usuario['clave']);

        // while($consulta = mysqli_fetch_assoc($consultas)){

        //     echo $consulta['id']."  ".$consulta['email']."<hr>";

        // 

    }else{

        echo "Petro presidente";

    }