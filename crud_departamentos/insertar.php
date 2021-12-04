<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$Habitacion=$_POST['Habitacion'];
$Alimentos_bebidas=$_POST['Alimentos_bebidas'];
$Recursos_humanos=$_POST['Recursos_humanos'];
$Marketing=$_POST['Marketing'];
$Contabilidad=$_POST['Contabilidad'];
$Recepcion=$_POST['Recepcion'];

$sql="INSERT INTO departamentos VALUES('$id', '$Habitacion', '$Alimentos_bebidas', '$Recursos_humanos', '$Marketing','$Contabilidad','$Recepcion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: index.php");
}else {
    echo "hay un problema";
}
?>

