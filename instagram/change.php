<?php
$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver'); 
	if ($_FILES['img']['name'] !=null) {
		$query = mysqli_query($connect, "INSERT INTO instagram_post (id, post_name, post_text, img) VALUES ('" . $_POST['id'] . "','" . $_POST['post_name'] . "', '" . $_POST['post_text'] . "', 'images/" . $_FILES['img']['name'] . "')");
		move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
	}

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
	$query = mysqli_query($connect, "SELECT * FROM instagram");
	$logo = $query->fetch_assoc();
	header('Location: http://myserver/instagram/login.php?id=' . $logo['id']);
?>