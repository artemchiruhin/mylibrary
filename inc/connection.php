<?php
    $host = "host";
    $user = "user";
    $pass = "password";
    $db = "dbname";

    $connect = mysqli_connect($host, $user, $pass, $db) or die("Ошибка" . mysqli_connect_error($connect));
