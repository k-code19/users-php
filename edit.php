<!DOCTYPE html>

<html>
	
	<head>
		<title> Редактирование </title>
		<script type="text/javascript" src="LR2.js"></script>
		<link href="LR2.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<?php
			include_once("db.php");
			
			$id = $_GET['id'];
			
			$result = mysql_query("SELECT surname, name, patronymic, dob, sex, sport
			FROM clients
			WHERE id='$id'   
			");
			$row = mysql_fetch_assoc($result);
			$sex=$row['sex'];
			$sport=$row['sport'];
		?>
		
		<a href="index.php">Вывод</a>
		<a href="add.php">Добавить</a>
		<div id="main">
			<form name="form" action="edithandler.php?id=<?php echo $id; ?>" method="post">
				<fieldset><legend> Регистрация </legend>
					<div id="error" class="notError"></div>
					<table>
						<tr> 
							<td><span>* </span>Фамилия:</td>
							<td>
								<input type="text" 
								name="surname" 
								value="<?php echo $row['surname']; ?>"
								placeholder="Введите Вашу фамилию"
								data-msg="Неправильный или отсутствует ввод фамилии!"
								data-pattern="^[a-zа-яA-ZА-Я'-]+$">
							</td>
						</tr>
						<tr> 
							
							<td><span>* </span>Имя:</td>
							<td>
								<input type="text"
								name="name"
								value="<?php echo $row['name']; ?>"
								placeholder="Введите Ваше имя"
								data-msg="Неправильный или отсутствует ввод имени!"
								data-pattern="^[a-zа-яA-ZА-Я'-]+$">
							</td>
						</tr>
						<tr> 
							<td><span>* </span>Отчество:</td>
							<td>
								<input type="text" 
								name="patronymic" 
								value="<?php echo $row['patronymic']; ?>"
								placeholder="Введите Ваше отчество"
								data-msg="Неправильный или отсутствует ввод отчества!"
								data-pattern="^[a-zа-яA-ZА-Я'-]+$">
							</td>
						</tr>
						<tr> 
							<td><span>* </span>Дата рождения:</td>
							<td>
								<input type="text" 
								name="dob"
								value="<?php echo $row['dob']; ?>"
								placeholder="Введите дату в формате yyyy-mm-dd"
								data-msg="Неправильный или отсутствует ввод даты!"
								data-pattern="^\d{4}-\d{1,2}-\d{1,2}$"
								>
							</td>
						</tr>
						
						<tr>
							<td><span>* </span>Пол:</td>
							<td>
								<input type="radio" id="sexM" name="sex" data-msg="Выберите пол!" value="Мужской">Мужской
								<input type="radio" id="sexF" name="sex" data-msg="Выберите пол!" value="Женский">Женский
								
								<span id="spanSex"></span>
							</td>
						</tr>
						
						<td> <span> * </span>Ваш вид спорта: </td>
						<td>
							<select name="sport" data-msg="Вы не выбрали вид спорта!">
								<option value="none"> Не выбрано </option>
								<option value="box" > Бокс </option>
								<option value="basketball"> Баскетбол </option>
								<option value="hourse">Конный спорт </option>
								<option value="football">Футбол </option>
							</select>
						</td>
					</tr>
					
					
				</table>
			</fieldset>
			<p align="center">
				<input type="submit" name="save" value="Сохранить">
			<input type="reset" value="Отмена"></p>
		</form>
	</div>
	
	<script type="text/javascript">
		if("<?php echo $sex; ?>" == "Мужской")  
		document.getElementById("sexM").checked=true;
		else  document.getElementById("sexF").checked=true;
		
		if("<?php echo $sport; ?>" == "box") form.sport[1].selected=true;
		else if("<?php echo $sport; ?>" == "basketball") form.sport[2].selected=true;
		else if("<?php echo $sport; ?>" == "hourse") form.sport[3].selected=true;
		else if("<?php echo $sport; ?>" == "football") form.sport[4].selected=true;
	</script>
</body>
</html>