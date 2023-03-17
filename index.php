<?php include("db.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Agregamos los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
	
    <?php if(isset($_SESSION['message'])){?>
        <div class="alert alert-info" id = "myalert"><?= $_SESSION['message']?></div>
        <?php session_unset();}?>
    
    <div class="container">
        <h1>Formulario de usuario</h1>
        <form action="insert.php" method="POST" id="query_js">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group">
                <label for="birthDay">Fecha de nacimiento:</label>
                <input type="date" class="form-control" name="birthDay" required>
            </div>

            <div class="form-group">
                <label for="city">Ciudad:</label>
                <input type="text" class="form-control" name="city" required>
            </div>

            <input type="submit" name="save" value="Guardar" class="btn btn-primary">
        </form>
        <br>
        <h2>Lista de usuarios</h2>
        <table class="table" id="myTable">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Contraseña</th>
                    <th>Fecha de nacimiento</th>
                    <th>Ciudad</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM formulary";
                $result_formulary = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_array($result_formulary)) {?>
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['password']?></td>
                        <td><?php echo $row['birthday']?></td>
                        <td><?php echo $row['city']?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-info btn-sm">
                                Editar
                            </a>
                            <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger btn-sm">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
  <script src="./indez.js" ></script>
    <!-- Agregamos los scripts de Bootstrap -->
  