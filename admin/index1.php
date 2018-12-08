<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshop";


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>eshop</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
<header>

<h1>	UNICORN </h1>
<ul>
	<li><a href="/">О НАС</a></li>
	<li><a href="cart.html">КОРЗИНА</a></li>
	<li><a href="index1.php">НАШИ ТОВАРЫ</a></li>
	<li><a href="../mes.php">КОНТАКТЫ</a></li>
</ul>
</header>
<main>
    <div class="mini-cart"></div>
    <div class="goods-out"></div>
</main>
<div class="tovdiscr">
   <p> Лучшие товары по лучшим ценам! </p>
<p>Чтобы преобрести товар, нажмите на кнопку "Купить"  и перейдите в КОРЗИНУ! 
</p> 
</div>

<div class="tov"></div>

<footer class="clear">
    <p>Все права защищены</p>
</footer>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/admin.js"></script>

</body>
</html>
