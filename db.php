<?php
$connection = mysqli_connect(
    'localhost',
    'root',
    '',
    'prueba_php_atento',
);


if (isset($connection)) {
 echo 'DB is connection';
}

?>