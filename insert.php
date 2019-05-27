<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'zametkaBD');
		$lol = mysqli_query($connect, "INSERT INTO wish ( text,date ) VALUES ('". $_POST['text'] . "','". $_POST['date'] . "')");
		header("Location:index.php");
 ?>