
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eshop";


?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link href="сss/style.css" rel="stylesheet">
</head>
<body>
	 <div class="goods-out"></div>

<script src="admin/js/jquery-3.2.1.min.js"></script>
<script src="admin/js/admin.js"></script>
 
<FORM NAME = "Он-лайн заявка" METHOD = "POST" ENCTYPE = "text/plain">
  <table>
<tr>
<td>
<p >Ф.И.О.</p>
<td>
<input type=text name="Ф.И.О.">
<TR>

<td>
<p>E-mail</p>
<td>
<input type=text name="E-mail" >
<TR>
<td>
<p>Телефон/Факс</p>
<td>
<input type=text name="Телефон" >
<TR>
<td>
<p >ГОРОД</p>
<td>
<input type=text name="Куда">
<TR>
<td>
<p>ОТДЕЛЕНИЕ НОВОЙ ПОЧТЫ </p>
<td>
<input type=text name="Новая почта №" >
<TR>

<td>
<p>Номер карты </p>
<td>
<input type=text name="карта" >
<tr>

<td>
<p>Стоимость (грн.)</p>
<td>
<input type=text name="Стоимость" >
<tR>

<td>
<p >Форма оплаты:</p>
<td><select name="Форма оплаты:"><option value="100% предоплата">100% предоплата&nbsp;&nbsp;
</option><option value="Наличная оплата" >Наличная оплата&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</option><option value="Безналичная оплата">Безналичная оплата&nbsp;
</option></select></td></tr>


<tr>
<td>
<p>Дополнительная <br>информация </p>
<td>
<TEXTAREA type=text name="Дополнительная информация:" >
</TEXTAREA>
</table>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value='Отправить'>





</FORM>

<INPUT TYPE = "hidden" SIZE = 0 NAME = "Host" value="<!--#echo var="REMOTE_HOST"-->
<INPUT TYPE = "hidden" SIZE = 0 NAME = "IP" value="<!--#echo var="REMOTE_ADDR"-->



</body>

</html>