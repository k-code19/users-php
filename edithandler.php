<?php
	include_once("db.php");
	
	$id = $_GET['id'];
	if(isset($_POST['save']))
	{
		$surname = strip_tags(trim($_POST['surname']));
		$name = strip_tags(trim($_POST['name']));
		$patronymic = strip_tags(trim($_POST['patronymic']));
		$dob = strip_tags(trim($_POST['dob']));
		$sex = strip_tags(trim($_POST['sex']));
		$sport = strip_tags(trim($_POST['sport']));
		mysql_query("UPDATE clients
		SET surname='$surname', name='$name', patronymic='$patronymic', dob='$dob', sex='$sex', sport='$sport'
		WHERE id='$id'
		");
		echo "<h1>Изменено!</h1>";
		include_once("index.php");
	}
?>

