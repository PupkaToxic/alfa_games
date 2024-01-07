<?php 

    session_start();
    require_once 'connect.php';

    $img = $_POST['photo'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    $id = $_SESSION['user']['id'];
    mysqli_query($link, "INSERT INTO `basket` (`id`, `name`, `photo`, `price`, `client_id`) VALUES (NULL, '$name', '$name', '$price', '$id')");
    header('Location: ../main.php'); 