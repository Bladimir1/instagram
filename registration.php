<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	$query = mysqli_query($connect, "INSERT INTO instagram (mail, name, avatar, login, password) VALUES ('" . $_POST['mail'] . "', '" . $_POST['name'] . "', 'images/" . $_FILES['avatar']['name'] . "', '" . $_POST['login'] . "', '" . $_POST['password'] . "')");
	header('Location:http://myserver/instagram/auto.php');
?>
