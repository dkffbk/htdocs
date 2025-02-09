<?php
    session_start();
    if(!isset($_SESSION['user'])) {
        header("location: index.php");
        exit();
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="max-width: 800px;">
        <h1 class="h4 my-4">Profile</h1>
        <ul class="list-group mb-2">
            <li class="list-group-item">Name: Alice</li>
            <li class="list-group-item">Email: alice@gmail.com</li>
            <li class="list-group-item">Phone: 838272838</li>
            <li class="list-group-item">Address: Anywhere</li>
        </ul>

        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>
</html>