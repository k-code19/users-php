<?php
	$connection=mysql_connect("localhost","root","12345");
	$db=mysql_select_db("sport");
	mysql_query(" SET NAMES 'utf8' ");
	if(!$connection || !$db) exit(mysql_error());
?>