<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'zametkaBD');
	$query = mysqli_query($connect,'SELECT*FROM wish');
	$color = ['red', 'green'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>lol</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<div class="container-fluid bg-primary">
		 <h3>
		 	Ты крут!
		 </h3>
	</div>
	<div class="container">
		<div class="row">
			<form method="POST" action="insert.php" enctype="multipart/form-data">
				<input type="text" name="text">
				<input type="date" name="date">
				<button class="submit" type="submit">
					Go
				</button>
			</form>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<?php 
	 				for ($i=0; $i < $query->num_rows; $i++) { 
	 					$avatar=$query->fetch_assoc();
				?>
				<?php $s = $avatar['status']; 
?>
				
				<div class="row">
					<div class="col-2">
						<p class="date">
							<?php 
								echo $avatar['date'];
							 ?>
						</p>
					</div>
					<div class="col-7">
							<?php 
							echo "<p style='color: ". $color[$s]. "'>
								" .$avatar['text']."	
								</p>";
							echo '
							<form action="update.php" method="post">
						 	<input type="text" name="text">
						 	<button>go</button>
						 </form>
						';

						 ?>
						 
					</div>
					<div class="col-3">
						<?php 
								echo '<a href = "status.php?id='. $avatar['id'] . '&status='. $avatar['status'] . '">';
								
			 				?>
						<button class="done">
							done
						</button>
						<?php 
							echo '</a>';
						 ?>
						<?php 
								echo '<a href = "delete.php?id='. $avatar['id'] . '">';
								
			 				?>
						<button class="delete">
							delete
						</button>
						<?php 
							echo '</a>';
						 ?>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>