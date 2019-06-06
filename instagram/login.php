<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php 
		$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
		$query = mysqli_query($connect, "SELECT * FROM instagram WHERE id = " . $_GET['id']);
		$logo = $query->fetch_assoc();

		echo '<img class="col-2  rounded-sm" src="' . $logo['avatar'] . '">';
		echo $logo['name'] . ' ';
		echo $logo['mail'] . ' ';
		echo $logo['id'];
	?>
	
	<form method="POST" action="change.php" enctype="multipart/form-data">
		<?php echo '<input type="hidden" name="id" value="' . $logo['id'] . '" class="form-control">'; ?>
		<?php echo '<input type="" placeholder="Post_name" name="post_name" value="' . $_POST['post_name'] . '"class="form-control">'; ?>
		<?php echo '<input type="" placeholder="Post_text" name="post_text" value="' . $_POST['post_text'] . '"class="form-control">'; ?>
		<?php echo '<input type="file" name="img">'; ?>
		<button>Edit</button>
	</form>



	<div class="row">
		<div class="col-3">
		</div>
			<div class="col-8 row align-content-md-center flex-wrap">
				<?php 
					$connect = mysqli_connect('127.0.0.1', 'root', '', 'myserver');
					$query = mysqli_query($connect, "SELECT * FROM instagram_post");				 			
					$logo = $query->fetch_assoc();
				?>
				<?php for($i = 0; $i < $query->num_rows; $i++){ ?>
				<div class="col-10">
					<div class="row">
						<div class="col-2 bg-warning">
							<?php echo '<img class="col-6 w-100" src="' . $logo['avatar'] . '">'; ?>
						</div>
						<div class="col-8 bg-secondary">

							<div class="d-flex"> 
								<?php $logo = $query->fetch_assoc(); ?>
							</div>
							
							<!---- post_name ---->
							<div>
								<h4><?php echo $logo['post_name'];?></h4>
							</div>
							<!---- post_text ---->
							<div>
								<p><?php echo $logo['post_text'];?></p>
							</div>
							<!---- post_image ---->
							<div>
								<?php echo '<img class="col-8 rounded-sm" src="' . $logo['img'] . '">';?>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
	</div>
</body>
</html>
