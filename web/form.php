<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>form user_name</title>
</head>

<body>
	<h1>Информация об авторе</h1>
	<?='I\'m alive!'?>
	<form action="./post.php" method="post">
		<div>
			<label for="user_name">Введите ваше имя</label>
			<input type="text" name="user_name" value="">
		</div>
		<div>
			<input type="submit" name="submit" value="Отправить">
		</div>
	</form>
</body>

</html>