<?php 
include '../functions.php';

//task1([1,2,3], false);

//echo task2('+', 2,3,4);

//echo task3(5,7);

//task4

echo date('d.m.Y H:i');
echo '<br>';
echo strtotime('24.02.2016 00:00:00');
echo '<br>';
echo date('d.m.Y H:i:s', 1456261200);
echo '<br>';

//task5     Дана строка: “Карл у Клары украл Кораллы”. Удалить из этой строки все заглавные буквы “К”.
  //  Дана строка: “Две бутылки лимонада”. Заменить “Две”, на “Три”.
 
$strings ='Карл у Клары украл Кораллы';
echo str_replace('К', '', $strings);
echo '<br>';
$strings1 ='Две бутылки лимонада';
echo str_replace('Две', 'Три', $strings1);


//task6

file_put_contents('test.txt', "Hello again!"); //выдает ошибку 

my_file_get_contents('text.txt');