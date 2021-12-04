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

$sql="INSERT INTO roles VALUES('$id', '$nombre', '$apellido_paterno', '$apellido_materno', '$rol','$horaInicio','$horaSalida')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: index.php");
}else {
    echo "hay un problema";
}
?>

