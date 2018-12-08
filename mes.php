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
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/mes.css">
</head>
<body>
<header>

<h1>	UNICORN </h1>
<ul>
	<li><a href="/">О НАС</a></li>
	<li><a href="admin/cart.html">КОРЗИНА</a></li>
	<li><a href="admin/index1.php">НАШИ ТОВАРЫ</a></li>
	<li><a href="#">КОНТАКТЫ</a></li>
</ul>
</header>
	    	


	    		<h2> Здесь вы можете с нами связаться,</h2> <h2>задать нам вопросы, написать свои пожелания</h2>
	    		<div class="conteiner">
	    			<form action= "post.php" method= "POST"> 
 
<p>Имя: </p><p> <input type= "text" name= "name"> </p> 
 
<p>E-mail: </p><p> <input type= "text" name= "email"></p> 
 
<p>Сообщение: </p><p> <textarea rows= "10" cols= "45" name= "message"></textarea></p> 
 
<input type= "submit" value= "Отправить"> 

</div>
	    	<div class="contact">

  <ul>
<a href=""> Адрес: Харьков, ул. Пушкинская 79.1 </a>
 <br>
<a href="tel: +380950316228"> Моб. телефон: +3 (095) 031-62-28</a>
  <br>
 
<p>
<a href="https://annka.m.s.1998@gmail.com"><img src="images/gmail.jpg"  height="50"id="gmail" /></a> 
<a href="https://vk.com/id120188552"><img src="images/vk.jpg"  height="50"id="vk" /></a> 
<a href="https://www.facebook.com/anna.malahovskaya.7"><img src="images/face.jpg"  height="50"id="facebook" /></a>
<a href="https://www.instagram.com/annka.ml/"><img src="images/inst.jpg"  height="50"id="instagram" /></a> 
</p>


  </div> 

	  



<div id="footer">
   
    &copy; Anna Malahovskaya
   </div>
