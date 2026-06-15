<?php
session_start();

$i = $_GET['i'];

unset($_SESSION['carrito'][$i]);

$_SESSION['carrito'] = array_values($_SESSION['carrito']);

header("Location: ../views/carrito/carrito.php");
?>
