<?php
include("conexion.php");
$con=conectar();

$sql="SELECT * FROM departamentos";
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
                <h1>Encargados de departamentos por dias de la semana</h1>
               <form action="insertar.php" method="POST">
               
                                    <input type="text" class="form-control mb-3" name="id" placeholder="id">     
                                    <input type="text" class="form-control mb-3" name="Habitacion" placeholder="Habitacion">
                                    <input type="text" class="form-control mb-3" name="Alimentos_bebidas" placeholder="Alimentos_bebidas">
                                    <input type="text" class="form-control mb-3" name="Recursos_humanos" placeholder="Recursos_humanos">
                                    <input type="text" class="form-control mb-3" name="Marketing" placeholder="Marketing">
                                    <input type="text" class="form-control mb-3" name="Contabilidad" placeholder="Contabilidad">
                                    <input type="text" class="form-control mb-3" name="Recepcion" placeholder="Recepcion">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
               </form>
               <a href="../index.php">Inicio</a>
               </div>

               <div class="col-md-8">
               <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th> 
                                        <th>Habitacion</th> 
                                        <th>Alimentos_bebidas</th> 
                                        <th>Recursos_humanos</th> 
                                        <th>Marketing</th>
                                        <th>Contabilidad</th>
                                        <th>Recepcion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th> 
                                                <th><?php  echo $row['Habitacion']?></th> 
                                                <th><?php  echo $row['Alimentos_bebidas']?></th> 
                                                <th><?php  echo $row['Recursos_humanos']?></th> 
                                                <th><?php  echo $row['Marketing']?></th>
                                                <th><?php  echo $row['Contabilidad']?></th>
                                                <th><?php  echo $row['Recepcion']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                         
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