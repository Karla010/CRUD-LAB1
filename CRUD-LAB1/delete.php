<?php
include 'config/db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM libros WHERE id = ?");
$stmt->execute([$id]);
header("Location: read.php");
