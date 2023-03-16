<?php
// optengo la base de datos la localizacion el usuario, contraseña, y nombre de la base de datos.
session_start();

$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'prueba_php_atento',
);
/*
if (isset($connection)) {
 echo 'DB is connection';
}
*/

?>