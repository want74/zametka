<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'zametkaBD');
	if ($_GET['status'] == 0) {
		$kek = mysqli_query($connect, "UPDATE wish SET status = 1 WHERE id = '" . $_GET['id'] . "'");
	header("Location: index.php");
	}
	
 ?>