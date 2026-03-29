<?php

$conn = mysqli_connect("localhost", "root", "root", "test");

$user = $_GET['user'];

// Correção com prepared statement
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $user);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

while($row = mysqli_fetch_assoc($result)) {
    echo $row['username'];
}

?>