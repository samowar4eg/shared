<html>
<body>
<form method="POST" >
    Введите a: <input type="text" name="name_a" >
    <input type="submit" value="Отправить">
</form>
<form method="POST" >
    Введите b: <input type="text" name="name_b" >
    <input type="submit" value="Отправить">
</form>
<?php
$a=$_GET['name_a'];
$b=$_GET['name_b'];
	if ($a > 2 && $a < 11)
	{
		echo 'Верно';
	}
else if ($b > 6 && $a < 14)
{
    echo  'Верно';
}
else echo "<br> Неверно";

?>
</body>
</html>