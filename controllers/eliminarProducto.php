<?php
session_start();
require_once('../config/conexion.php');

$id = $_GET['id'];

$stmt = $conexion->prepare("DELETE FROM camisetas WHERE id=?");
$stmt->execute([$id]);

header("Location: ../views/admin/dashboard.php");
?>
