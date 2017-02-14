<!DOCTYPE html>

<html>
	
	<head>
		<title> Добавление </title>
		<script type="text/javascript" src="LR2.js"></script>
		<link href="LR2.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
	<a href="index.php">Вывод</a>
	<a href="add.php">Добавить</a>

		<div id="main">
			<form name="form" action="addhandler.php" method="post">
				<fieldset><legend> Регистрация </legend>
					<div id="error" class="notError"></div>
					<table>
					<tr> 
							<td><span>* </span>Фамилия:</td>
							<td>
								<input type="text" 
								name="surname" 
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
								placeholder="Введите дату в формате yyyy-mm-dd"
								data-msg="Неправильный или отсутствует ввод даты!"
								data-pattern="^\d{4}-\d{1,2}-\d{1,2}$">
								
							</td>
						</tr>
						
						<tr>
							<td><span>* </span>Пол:</td>
							<td>
								<input type="radio" name="sex" data-msg="Выберите пол!" value="Мужской">Мужской
								<input type="radio" name="sex" data-msg="Выберите пол!" value="Женский">Женский
								
								<span id="spanSex"></span>
							</td>
						</tr>
						
							<td> <span> * </span>Ваш вид спорта: </td>
							<td>
								<select name="sport" data-msg="Вы не выбрали вид спорта!">
									<option value="none"> Не выбрано </option>
									<option value="box"> Бокс </option>
									<option value="basketball"> Баскетбол </option>
									<option value="hourse">Конный спорт </option>
									<option value="football">Футбол </option>
								</select>
							</td>
						</tr>	
					</table>
				</fieldset>
				<p align="center">
					<input type="submit" name="submit" value="Добавить">
				<input type="reset" value="Отмена"></p>
			</form>
		</div>
		
	</body>
</html>