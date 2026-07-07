<?php
include("connection.php");

$student = $_POST['student'];
$book = $_POST['book'];

$issue_date = date("Y-m-d");
$due_date = date("Y-m-d", strtotime("+7 days"));

mysqli_query($conn, "INSERT INTO issue_books(student,book,issue_date,due_date)
VALUES('$student','$book','$issue_date','$due_date')");

echo "issued";
?>