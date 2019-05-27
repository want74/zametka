<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'zametkaBD');
	$kek = mysqli_query($connect, "DELETE FROM wish WHERE id = '" . $_GET['id'] . "'");
	header("Location: index.php");
 ?>