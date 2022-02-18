<?php

    session_start();

    //Database conection
    $conn = mysqli_connect( //Library
        'localhost:3310', //IP
        'root', //User
        '', //Password
        'php-crud-mysql'//Database
    );

?>