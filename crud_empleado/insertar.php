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

$sql="INSERT INTO empleado VALUES('$idempleado', '$nombres', '$apellido_paterno','$apellido_materno', '$rfc', '$direccion','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("location: index.php");
}else {
    echo "hay un problema";
}
?>

