<?php
//Вычислить периметр и площадь прямоугольника если вторая сторона в 4 раза больше первой (первую сторону придумать самому)
//$side1=10;
//$side2=$side1*4;
//$perimeter=$side1*2+$side2*2;
//$area=$side1*$side2;
//echo "периметр : $perimeter";
//echo "<br> площадь : $area";

//Дано два числа. Вывести значение результата в логической переменной, которое определяет,
//  отличаются ли первое от второго на 10.(ответ true или false)

//$one=2;
//$two=7;
//
//if ($two!=$one+10)
//    var_dump(false);
//
//else
//    var_dump(true);

//Даны три числа. Найдите их среднее арифметическое, умножить его на 4 и сравнить с каждым из чисел.
//(ответ true или false + сами числа)
$first=4;
$second=13;
$third=27;
$average=($first+$second+$third)/3;
$mult=$average*4;

if ($mult!=$first)
    var_dump(false);
elseif ($mult!=$second)
    var_dump(false);
elseif ($mult!=$third)
    var_dump(false);
else var_dump(true);
echo "<br> среднее арифметическое : $average ";
echo "<br> среднее арифметическое*4 : $mult ";
