<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$rol=$_POST['rol'];
$horaInicio=$_POST['horaInicio'];
$horaSalida=$_POST['horaSalida'];


$sql="UPDATE roles SET  nombre='$nombre', apellido_paterno='$apellido_paterno', apellido_materno='$apellido_materno',rol='$rol',horaInicio='$horaInicio', horaSalida='$horaSalida' WHERE id='$id'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php"); 
    }
?>