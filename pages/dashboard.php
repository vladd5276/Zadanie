<?php 
session_start();
if(!isset($_SESSION["login"])){
	header('Location:login.php');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Личный кабинет</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>Добро пожаловать, <?php print($_SESSION["full_name"]); ?> </h1>
			<p>Вы вошли как <?php print($_SESSION["login"]); ?></p>
		</header>
		<nav class="sidebar">
			<ul>
				<li><a href="new_order.php">Подать заявку</a></li>
				<li><a href="dashboard.php">Мои заявки</a></li>
				<li><a href="logout.php">Выход</a></li>
			</ul>
		</nav>
		<main>
			<h2>Мои заявки</h2>
			<?php 
				$id=$_SESSION["id"];
				$orders=[];
				$db=new mysqli ("127.0.0.1","root","","korochki");
				$q="SELECT id,course_name,start_date,pay_method,status,created_at 
				    FROM courses
				    WHERE user_id='$id'
				    ORDER BY created_at";
				$orders=$db->query($q);
				$orders=$orders->fetch_all(MYSQLI_ASSOC);

				if (empty($orders)){
					echo ("<p>У вас пока нет заявок </p>");
				} else {
					echo "<table>";
					echo "<thead><tr><th>Название курса</th><th>Дата начала</th><th>Метод оплаты</th><th>Статус</th><th>Дата заявки</th></tr></thead>";
					echo "<tbody>";

					foreach ($orders as $order){
						echo "<tr><td>{$order["course_name"]}</td><td>{$order["start_date"]}</td><td>{$order["pay_method"]}</td><td>{$order["status"]}</td><td>{$order["created_at"]}</td></tr>";
					}

					echo "</tbody></table>";
				}
			 ?>
		</main>
	</div>


	
	
		
	

</body>
</html>

