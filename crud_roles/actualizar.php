<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM roles WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                
                                <input type="text" class="form-control mb-3" name="id" placeholder="id" value="<?php echo $row['id']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellido_paterno" placeholder="Apellido Paterno" value="<?php echo $row['apellido_paterno']  ?>"> 
                                <input type="text" class="form-control mb-3" name="apellido_materno" placeholder="Apellido Materno" value="<?php echo $row['apellido_materno']  ?>"> 
                                <input type="text" class="form-control mb-3" name="rol" placeholder="rol" value="<?php echo $row['rol']  ?>"> 
                                <input type="text" class="form-control mb-3" name="horaInicio" placeholder="horaInicio" value="<?php echo $row['horaInicio']  ?>">
                                <input type="text" class="form-control mb-3" name="horaSalida" placeholder="horaSalida" value="<?php echo $row['horaSalida']  ?>">
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>