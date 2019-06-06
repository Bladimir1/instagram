<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	$query = mysqli_query($connect, 'SELECT * FROM instagram WHERE mail = "'. $_POST['mail'] .'" and password = "'. $_POST['password'] . '"');
	$logo = $query->fetch_assoc();
	if ($query->num_rows == 0){
		header('Location:http://myserver/instagram/auto.php?name=нет такого пользователя');

	}else{
		header('Location:http://myserver/instagram/login.php?id=' . $logo['id']);

	};
?>


