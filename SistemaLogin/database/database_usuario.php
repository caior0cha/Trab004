<?php

$local = '127.0.0.1';
$user = 'root';
$pwd = '';
$db = 'bd_usuario';

$con = new mysqli($local, $user, $pwd, $db);

    if ($con->connect_error) {
        echo $con->connect_error;
    }

?>