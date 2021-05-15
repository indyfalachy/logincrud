<?php

session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="kong.jpg" alt="" height="auto" width="100%">

    <h2>
     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi iusto dolorum optio nihil ad. Delectus et voluptatem asperiores voluptas aliquid autem a beatae accusamus sequi labore, nobis id rerum fugit.
    </h2>
<br>
    <a href="logout.php" class="logout">Logout</a>
</body>
</html>