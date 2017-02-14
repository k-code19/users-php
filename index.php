<!doctype>
<html>
	<head>
		<title>Вывод</title>
	</head>
	<body>
		<a href="index.php">Вывод</a>
		<a href="add.php">Добавить</a>
		
		<form name="form" method="get" action="search.php">
			<select name="param">
				<option value="surname"> Фамилия </option>
				<option value="name"> Имя </option>
				<option value="patronymic"> Отчество </option>
				<option value="dob">Дата рождения </option>
				<option value="sex">Пол </option>
			</select>
			<input name="text" type="text">
			<input type="submit" name="ok" value="Искать">
		</form>
		
		<?php
			include_once("db.php");
			
			
			if(isset($_GET["ok"])) 
			{
				$text = $_GET['text'];
				switch($_GET["param"])
				{
					case "surname": $result = mysql_query("SELECT id, surname, name, patronymic, dob, sex, sport
					FROM clients
					WHERE surname='$text'   
					");
					break;
					case "name":$result = mysql_query("SELECT id, surname, name, patronymic, dob, sex, sport
					FROM clients
					WHERE name='$text'   
					");
					break;
					case "patronymic": $result = mysql_query("SELECT id, surname, name, patronymic, dob, sex, sport
					FROM clients
					WHERE patronymic='$text'   
					");
					break;
					case "dob": $result = mysql_query("SELECT id, surname, name, patronymic, dob, sex, sport
					FROM clients
					WHERE dob='$text'   
					");
					break;
					case "sex": $result = mysql_query("SELECT id, surname, name, patronymic, dob, sex, sport
					FROM clients
					WHERE sex='$text'   
					");
					break;
					
				}
			}
			else 
			$result=mysql_query("SELECT * FROM clients");
			
			mysql_close();
		?>
		
		<table rules="all" cellpadding="5" style="border: 1px solid black; margin: auto;">
			<tr>
				<th>ID</th>
				<th>Фамилия</th>
				<th>Имя</th>
				<th>Отчество</th>
				<th>Дата рождения</th>
				<th>Пол</th>
				<th>Вид спорта</th>
				<th>Действия</th>
			</tr>
			
			<?php
				while($row=mysql_fetch_assoc($result))
				{
				?>
				<tr>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["surname"]; ?></td>
					<td><?php echo $row["name"]; ?></td>
					<td><?php echo $row["patronymic"]; ?></td>
					<td><?php echo $row["dob"]; ?></td>
					<td><?php echo $row["sex"]; ?></td>
					<td><?php echo $row["sport"]; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $row['id']; ?>">Редактировать</a><br>
						<a href="deletehandler.php?id=<?php echo $row['id']; ?>">Удалить</a>
					</td>
				</tr>
				<?php
				}
				
			?>
			
		</table>
		
	</body>
</html>			