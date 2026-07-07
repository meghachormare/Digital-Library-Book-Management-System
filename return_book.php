<?php
include("connection.php");

$id = $_POST['id'];

$result = mysqli_query($conn, "SELECT due_date FROM issue_books WHERE id='$id'");
$row = mysqli_fetch_assoc($result);

$due = $row['due_date'];
$return_date = date("Y-m-d");

$fine = 0;

if($return_date > $due){
    $days = (strtotime($return_date) - strtotime($due)) / (60*60*24);
    $fine = $days * 5;
}

mysqli_query($conn, "UPDATE issue_books 
SET return_date='$return_date', fine='$fine' 
WHERE id='$id'");

echo "returned";
?>