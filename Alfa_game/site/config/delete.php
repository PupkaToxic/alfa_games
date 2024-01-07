<?php
session_start();
require_once 'connect.php';


if (!$_SESSION['user']) {
	header('Location: autoris.php');
}

$id = $_GET['id'];

mysqli_query($link, query:"DELETE FROM `basket` WHERE `basket`.`id` = '$id'");

header('Location: ../basket.php')


?>
