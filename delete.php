<?php 
// en esta funcion eliminamos  por medio del id
include("db.php");

if (isset($_GET['id'])){
    $id = $_GET['id']; // tenemos guardado el id en una variable despues de confirmar que si exixta
    $query = "DELETE FROM formulary WHERE id = $id";// usemos la busqueda para eliminar de la base de datos
    $result = mysqli_query($connection, $query);// guardamos en una variable la busqueda en la coneccion de db que esta incluida para terminar de hacer la consulta, y luego le asignamos el query.
  if(!$result){
    die("Query failed");
  }

  $_SESSION['message'] = 'formulary Removed';
  header("location: index.php");

}   

?>