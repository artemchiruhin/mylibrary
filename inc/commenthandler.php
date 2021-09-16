<?php
    require_once 'connection.php';
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);
    $book_id = $_GET['id'];
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO comments (author, text, book_id, pubdate) VALUES ('$name', '$comment', '$book_id', '$date')";
    $result = mysqli_query($connect, $sql);
    if($result){
        header('Location: ../pages/book.php?id=' . $_GET['id']);
        unset($name);
        unset($comment);
        unset($book_id);
        unset($date);
    }
    else{
        echo "Ошибка " . mysqli_error($connect);
    }