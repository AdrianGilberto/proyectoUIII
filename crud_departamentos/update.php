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



$sql="UPDATE departamentos SET  Habitacion='$Habitacion',Alimentos_bebidas='$Alimentos_bebidas',Recursos_humanos='$Recursos_humanos',Marketing='$Marketing', Contabilidad='$Contabilidad',Recepcion='$Recepcion' WHERE id='$id'"; 
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php"); 
    }
?>