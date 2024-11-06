<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("UPDATE habits SET status=1 WHERE id=$id");
header("Location: index.php");
?>