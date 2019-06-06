<!DOCTYPE html>
<html>
<head>
	<title>Instagram</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<form action="registration.php" method="POST" enctype="multipart/form-data">
		<?php echo '<input type="hidden" name="id" value="' . $_POST['id'] . '" class="form-control">'; ?>
		<input type="" placeholder="e-mail" name="mail">
		<input type="" placeholder="name" name="name">
		<h4>Выберите аватар</h4>
		<input type="file" name="avatar">
		<input type="" placeholder="login" name="login">
		<input type="" placeholder="password" name="password">
		<button>Press</button>
	</form>
	

	<a href="http://myserver/instagram/auto.php">Enter login</a>
</body>
</html>