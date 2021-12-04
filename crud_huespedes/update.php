<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$correo_electronico=$_POST['correo_electronico'];
$telefono=$_POST['telefono'];
$dias_hospedaje=$_POST['dias_hospedaje'];


$sql="UPDATE huespedes SET  nombre='$nombre', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno',correo_electronico='$correo_electronico',telefono='$telefono', dias_hospedaje='$dias_hospedaje' WHERE id='$id'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php"); 
    }
?>