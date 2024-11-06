<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM habits WHERE id=$id");
header("Location: index.php");
?>