<?php

    include("abre.php");

    $Nombre     = $_POST['Nombre'];
    $Apellidos  = $_POST['Apellidos'];
    $Calle      = $_POST['Email'];
    $Colonia    = $_POST['Estado'];
    $Cel        = $_POST['Cel'];

    $consulta = "INSERT INTO clientes(Nombre, Apellidos, Email, Estado, Cel) VALUES
  ('$Nombre','$Apellidos','$Email','$Estado','$Cel')";

       if ($conexion->query($consulta) === TRUE){
   /* header("Location: index.php"); */
}else{
    echo "Error: " . $consulta . "<br>" . $conexion->error;
  }
  $conexion->close();

    ?>