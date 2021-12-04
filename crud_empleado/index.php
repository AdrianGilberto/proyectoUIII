<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM empleado";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>HOTEL</title> 
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="css/style.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
     <div class="container mt-5">
          <div class="row">
               <div class="col-md-3">
                <h1>Ingrese datos:</h1>
               <form action="insertar.php" method="POST">
               
                                    <input type="text" class="form-control mb-3" name="idempleado" placeholder="Codigo del Empleado">     
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres del Empleado">
                                    <input type="text" class="form-control mb-3" name="apellido_paterno" placeholder="Apellido paterno">
                                    <input type="text" class="form-control mb-3" name="apellido_materno" placeholder="Apellido materno">
                                    <input type="text" class="form-control mb-3" name="rfc" placeholder="RFC">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
               </form>
               <a href="../index.php">Inicio</a>
               </div>

               <div class="col-md-8">
               <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th> 
                                        <th>Nombres</th> 
                                        <th>Apellido paterno</th> 
                                        <th>Apellido materno</th> 
                                        <th>RFC</th> 
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['idempleado']?></th> 
                                                <th><?php  echo $row['nombres']?></th> 
                                                <th><?php  echo $row['apellido_paterno']?></th> 
                                                <th><?php  echo $row['apellido_materno']?></th> 
                                                <th><?php  echo $row['rfc']?></th> 
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['idempleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['idempleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
               </table>
               </div>
          </div>
     </div>
     
</body>
</html>