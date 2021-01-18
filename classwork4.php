<?php
//$flowers=array (array("Название"=>"rose","Цена"=>100,"Количество"=>15),
//    array("Название"=>"тюльпаны","Цена"=>60,"Количество"=>20),
//    array("Название"=>"тромашки","Цена"=>80,"Количество"=>40)
//);
//echo "<h1>использование циклов для вывода элементов<h1/>";
//echo "<ol>";
//for ($row=0;$row<3; $row++){
//    echo "<li><b>номер строки $row</b>";
//    echo"<ul>";
//
//    for($col=0; $col<3;$col++){
//        echo"<li>".$flowers[$row][$col]."</li>";
//    }
//    echo "</ul>";
//    echo "</li>";
//}
//echo "</ol>";
//echo "<h1> Ручной доступ к элементам ассоц.массива</h1>";
//for ($row=0;$row<3;$row++){
//    echo $flowers[$row]["Название"]."цена".$flowers[$row]["Цена"].$flowers[$row]["Количество"];
//    echo "<br>";
//}
//echo "<h1>использование цикла foreach</h1>";
//echo "<ol>";
//for ($row=0;$row<3;$row++)
//{
//    echo "<li><b>Номер строки $row</b>";
//    echo "<ul>";
//    foreach ($flowers[$row] as $key=>$value)
//    {
//        echo "<li>".$value."</li>";
//    }
//    echo "</ul>";
//    echo "</li>";
//}

//$vasya=array (array("Имя"=>"Вася","Профессия"=>"Слесарь","Зарплата"=>1500),
//    array("Имя"=>"Петя","Профессия"=>"Водитель","Зарплата"=>4500),
//    array("Имя"=>"Леша","Профессия"=>"Повар","Зарплата"=>7500)
//);
//for ($row=0;$row<3;$row++){
// echo "<h1>Данные о человеке</h1>";
// foreach ($vasya[$row] as $key=>$value){
//     echo "<br>$value";
// }
//}

//$arr=[];
//for ($i=2; $i<10;$i++){
//    for ($j=2; $j<10;$j++){
//        $arr[$i][$j]=$i*$j;
//    }
//
//}
//echo "table";
//for($i=2;$i<10l; $i++){
//    echo
//}
//]
//
//$start=2;
//$end=9;
//$multiarr=array_fill($start,$end-$start+1,array_fill($start,$end-$start+1,0));

//function localhost($name){
//    echo "Вы находитесь на сайте $name</br>";
//
//}
//
//echo "Привет! </br>";
//localhost(54);
//localhost(6786);

function recursion($a){
    if ($a<20){
        echo "$a\n";
        recursion($a+1);
    }
}
echo recursion(7);





