<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM departamentos WHERE id='$id'";
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
                                <input type="text" class="form-control mb-3" name="Habitacion" placeholder="Habitacion" value="<?php echo $row['Habitacion']  ?>">
                                <input type="text" class="form-control mb-3" name="Alimentos_bebidas" placeholder="Alimentos_bebidas" value="<?php echo $row['Alimentos_bebidas']  ?>"> 
                                <input type="text" class="form-control mb-3" name="Recursos_humanos" placeholder="Recursos_humanos" value="<?php echo $row['Recursos_humanos']  ?>"> 
                                <input type="text" class="form-control mb-3" name="Marketing" placeholder="Marketing" value="<?php echo $row['Marketing']  ?>">
                                <input type="text" class="form-control mb-3" name="Contabilidad" placeholder="Contabilidad" value="<?php echo $row['Contabilidad']  ?>">
                                <input type="text" class="form-control mb-3" name="Recepcion" placeholder="Recepcion" value="<?php echo $row['Recepcion']  ?>">
                                <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>