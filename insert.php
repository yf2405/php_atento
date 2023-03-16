<?php
include("db.php");

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthDay = $_POST['birthDay'];
    $city = $_POST['city'] ;


       
   
   $query = "INSERT INTO formulary(name, email, password, birthDay, city) 
   VALUES ('$name', '$email', '$password', '$birthDay', '$city')";
  $result = mysqli_query($connection, $query);
  // Verificar si la consulta se realizó correctamente
  if(!$result){
    die("Error: La consulta no se realizó correctamente." . mysqli_error($connection));
} else {
    echo 'Los datos se guardaron correctamente';
}
$_SESSION['message'] = 'saved sus';

// Cerrar la conexión a la base de datos
 header("location: index.php");
}





?>