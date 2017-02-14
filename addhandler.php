<?php
	include_once("db.php");
	if(isset($_POST["submit"]))
	{
		$surname=strip_tags(trim($_POST["surname"]));
		$name=strip_tags(trim($_POST["name"]));
		$patronymic=strip_tags(trim($_POST["patronymic"]));
		$dob=strip_tags(trim($_POST["dob"]));
		$sex=strip_tags(trim($_POST["sex"]));
		$sport=strip_tags(trim($_POST["sport"]));
		mysql_query("INSERT INTO clients(surname, name, patronymic, dob, sex, sport)
		VALUES ('$surname','$name','$patronymic','$dob','$sex', '$sport')
		");
		//mysql_close();
		echo "<h1>Добавлено!</h1>";
		include_once("index.php");
	}
	
?>
