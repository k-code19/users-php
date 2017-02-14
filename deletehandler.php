<?php
	include_once("db.php");
	
	$id = $_GET['id'];
	mysql_query("DELETE FROM clients
	WHERE id='$id'
	");
	//mysql_close();
	echo "<h1>Удалено!</h1>";
	include "index.php";
?>