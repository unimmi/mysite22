<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

		$link = mysqli_connect('localhost', 'root', '', 'basename') or die('Cant connect: ');
		$query = "INSERT INTO `site` VALUES ('$name','$email','$message')";
		mysqli_query($link, $query) or die('Cant query: ');
?>