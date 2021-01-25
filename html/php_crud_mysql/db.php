<?php

    session_start();

    $conn =mysqli_connect
    (
        'localhost',
        'root',
        '',
        'php_mysql_crud'

    );

    /*sirve para verificar la coneccion de la base de datos
    if(isset($conn))
    {
        echo 'DB is connected';
    }
    */

?>