<?php
include("connection.php");

$result = mysqli_query($conn, "SELECT * FROM books");

while($row = mysqli_fetch_assoc($result)){
    echo $row['name']."|".$row['author']."<br>";
}
?>