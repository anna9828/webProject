<?php
$dbc = mysqli_connect('localhost', 'root', '', 'site');
if(!isset($_COOKIE['user_id']))
// isset. Возвращает TRUE, если var существует, в противном случае возвращается FALSE
 {
	if(isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		$user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		if(!empty($user_username) && !empty($user_password)) {
			$query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = SHA('$user_password')";
			$data = mysqli_query($dbc,$query);
			if(mysqli_num_rows($data) == 1) {
				$row = mysqli_fetch_assoc($data);
				setcookie('user_id', $row['user_id'], time() + (60*60*24*30));
				setcookie('username', $row['username'], time() + (60*60*24*30));
				$home_url = 'http://' . $_SERVER['HTTP_HOST'];
				header('Location: '. $home_url);
			}
			else {
				echo 'Извините, вы должны ввести правильные имя пользователя и пароль';
			}
		}
		else {
			echo 'Извините вы должны заполнить поля правильно';
		}
	}
}
// MySQLi — расширение драйвера реляционных баз данных, используемого в языке программирования PHP для предоставления доступа к базам данных MySQL. MySQLi является обновлённой версией драйвера PHP MySQL, и даёт различные улучшения в работе с базами данных.
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="style/style.css" rel="stylesheet">
</head>
<body>
<header>

<h1>	UNICORN </h1>
<ul>
	<li><a href="/">О НАС</a></li>
	<li><a href="admin/cart.html">КОРЗИНА</a>
	<li><a href="admin/index1.php">НАШИ ТОВАРЫ</a></li>
	<li><a href="mes.php">КОНТАКТЫ</a></li>
</ul>
</header>
<content>
	
	<div class="articles">
		
		<h2>ПРИВЕТСТВУЕМ В ИНТЕРНЕТ-МАГАЗИНЕ "UNICORN" !</h2>
		
		<img src="admin/img/o1.jpg" alt="">
		<p>Интернет-магазин детских игрушек и товаров для детей "Unicorn" рад приветствовать Вас - наших постоянных клиентов и впервые посетивших сайт нашего интернет магазина.

      С удовольствием представляем вашему вниманию товары самых известных и уважаемых мировых брендов среди производителей детских товаров.

       Мы искренне желаем, чтобы каждый посетитель интернет-магазина "Unicorn" легко и комфортно мог найти именно то, что он искал для своего любимого ребёнка: понравившийся бренд, нужная модель, требуемое качество, и всё это - по максимально выгодной цене.

Заказывайте, звонитеи обращайтесь к нам! Мы будем рады подобрать именно то, что нужно вашему ребенку! </p>
		
	</div> 
	

</content>
<section>
<?php
	if(empty($_COOKIE['username'])) {
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<label for="username">Логин:</label>
	<input type="text" name="username">
	<label for="password">Пароль:</label>
	<input type="password" name="password">
	<button type="submit" name="submit">Вход</button>
	<a href="signup.php">Регистрация</a>
	</form>
<?php
}
else {
	?>
	<p><a href="myprofile.php">Мой профиль</a></p>
	<p><a href="exit.php">Выйти(<?php echo $_COOKIE['username']; ?>)</a></p>
<?php	
}
?>
</section>


<footer class="clear">
	<p>Все права защищены</p>
</footer>

</body>

</html>