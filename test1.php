<?php
//$employees = [
//
//    [
//
//        'name' => 'Clark Kent',
//
//        'age' => 22,
//
//        'skills' => ['PHP', 'Java', 'C#']
//
//    ],
//
//    [
//
//        'name' => 'Steve Stifler',
//
//        'age' => 21,
//
//        'skills' => ['С++', 'JS', 'CSS', 'HTML']
//
//    ],
//
//    [
//
//        'name' => 'Bruce Wayne',
//
//        'age' => 35,
//
//        'skills' => ['PHP', 'PHP Unit', 'XDebug', 'JS']
//
//    ],
//
//    [
//
//        'name' => 'Peter Parker',
//
//        'age' => 18,
//
//        'skills' => ['PHP Unit', 'C', 'Pascal']
//
//    ]
//
//];
//
//foreach ($employees as $key=>$value)
//{
//    if ($value=='PHP' && $value=='PHP Unit')
//    {
//        echo "Name:$employees[name] . Age:$employees[age] . skills:$employees[skills]";
//    }
//    elseif ($value=='PHP')
//    {
//        echo "Name:$employees[name] . Age:$employees[age] . skills:$employees[skills]";
//    }
//    else continue;
//
//}
//
//
//
//$arr=Array ('0' => 'book1.pdf','1' => 'book11.pdf','2' => 'book12.pdf','3' => 'book2.pdf');
//foreach ($arr as $key=>$value)
//{
//
//}

//Дан двумерный массив, содержащий отрицательные и
//положительные числа. Выведете на экран индексы тех ячеек
//массива, которые содержат отрицательные числа.
$arr_keys=[];
$arr=["Положительные числа"=>[1,2,3,4,5,6],
    "Отрицательные числа"=>["минус1"=>-1,"минус2"=>-2,"минус3"=>-3,"минус4"=>-4,"минус5"=>-5,"минус6"=>-6]];
foreach ($arr as $key=>$value)
{
    foreach ($value as $k=>$num)
    {
        if ($num<0){
            print_r("$k<br>");

        }
    }
}
