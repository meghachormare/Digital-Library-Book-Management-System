<?php
include("connection.php");

$name = $_POST['name'];
$author = $_POST['author'];

mysqli_query($conn, "INSERT INTO books(name,author) VALUES('$name','$author')");

echo "success";
?>