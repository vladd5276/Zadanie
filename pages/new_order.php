<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Новая заявка</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Подать заявку</h1>
		</header>
		<form action="../handlers/app_h.php" method="POST">
			<div class="form-group">
				<label for="course_name">Наименование курса</label>
				<input type="text" id="course_name" name="course_name" required placeholder="Например: Английский язык">
			</div>
			<div class="form-group">
				<label for="start_date">Желаемая дата начала</label>
				<input type="date" id="start_date" name="start_date" required>
			</div>
			<div class="form-group">
				<label>Способ оплаты</label>
				<div class="radio-group">
					<label>
						<input type="radio" name="pay_method" value="cash" checked> 
						Наличные
					</label>
					<label>
						<input type="radio" name="pay_method" value="phone"> 
						Перевод по телефону
					</label>
				</div>
			</div>
			<button type="submit">Отправить заявку</button>
		</form>
			<a href="dashboard.php">Назад</a>
	</div>
</body>
</html>