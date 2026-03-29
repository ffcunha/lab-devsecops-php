<?php

// Vulnerabilidade: SQL Injection
$conn = mysqli_connect("localhost", "root", "root", "test");

$user = $_GET['user'];

$query = "SELECT * FROM users WHERE username = '$user'";

$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo $row['username'];
}

?>