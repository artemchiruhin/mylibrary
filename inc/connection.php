<?php
    $host = "localhost";
    $user = "id16467839_artem09521";
    $pass = "KUW\(!(>%v}b5M&Z";
    $db = "id16467839_mylibrary";

    $host = "localhost";
    $user = "mysql";
    $pass = "mysql";
    $db = "mylibrary";

    $connect = mysqli_connect($host, $user, $pass, $db) or die("Ошибка" . mysqli_connect_error($connect));