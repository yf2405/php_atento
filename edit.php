<?php 
include("db.php");
/* se verifica si se ha enviado una solicitud GET con el parámetro 'id', 
que se utiliza para recuperar la información del usuario que se va a editar. */
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM formulary where id = $id";
   $result = mysqli_query($connection, $query);
   if(mysqli_num_rows($result) === 1) {
     $row = mysqli_fetch_array($result);
     $name = $row['name'];
     $email = $row['email'];
     $password = $row['password'];
     $birthDay = $row['birthday'];
     $city = $row['city'] ;
   }

}
 
  /*, se verifica si se ha enviado una solicitud POST con el botón de actualización. Si se encuentra la solicitud, se almacenan los datos de 
  formulario actualizados en variables PHP y se ejecuta una consulta UPDATE en la base de datos para actualizar la información del usuario.  */
   if (isset($_POST['update'])){
      $id = $_GET['id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $birthDay = $_POST['birthDay'];
      $city = $_POST['city'] ;

      $query = "UPDATE formulary set name = '$name', email = '$email', password = '$password', birthDay = '$birthDay', city = '$city' WHERE id = $id";
      mysqli_query($connection, $query);
      header("location: index.php");
  }




 /* se muestra un formulario HTML con los campos del usuario a editar. El atributo 'action' del
  formulario se establece en la página actual con el parámetro 'id' en la URL para que la página sepa qué usuario está editando. */
?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <div class="container">
<h1>Formulary of user</h1>
	<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
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
    <input type="submit" name="update" value="Guardar" class="btn btn-primary">
	</form>