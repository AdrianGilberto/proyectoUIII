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

$sql="INSERT INTO huespedes VALUES('$id', '$nombre', '$apellido_paterno', '$apellido_materno', '$correo_electronico','$telefono','$dias_hospedaje')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: index.php");
}else {
    echo "hay un problema";
}
?>

