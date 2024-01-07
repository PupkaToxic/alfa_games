<?php

    $servername = "localhost";
    $database = "alfa_game";
    $username = "root";
    $password = "";
    
    $link = mysqli_connect($servername, $username, $password, $database);
    
    if (!$link) {
        die('Error');
    }