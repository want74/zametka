<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'zametkaBD');
	$kek = mysqli_query($connect, "UPDATE wish SET text = '".$_POST['text']."' WHERE id = '" . $_POST['id'] . "'");
	header("Location: index.php");
 ?>