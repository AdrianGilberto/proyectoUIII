<?php

include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombres=$_POST['nombres'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$rfc=$_POST['rfc'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];



$sql="UPDATE empleado SET  nombres='$nombres',apellido_paterno='$apellido_paterno',apellido_materno='$apellido_materno',rfc='$rfc',direccion='$direccion', telefono='$telefono' WHERE idempleado='$idempleado'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php"); 
    }
?>