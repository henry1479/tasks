<?php

// задание 1

$arrayNumber = [
    [0,1,2,3,4,5,6,7,8,9,10]
];

echo "Вывожу цифры по порядку <br/>";
foreach($arrayNumber[0] as $number) {
    echo "$number <br/>";
}

// задание 2
// SELECT * FROM users WHERE id = 10;

// задание 3 

$arrayInfo = [
    'name' => 'Ivan',
    'surname' => 'Ivanov',
    'address' => 'Petrovsk',
    'telephone' => '8 (985) 222-33-44'
];

echo "Вывожу данные пользователя из массива <br/>";

foreach($arrayInfo as $key => $value){
    echo "$key $value <br/>";
} 

// 4 задание

$arrayMonth = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март'
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь'
    ]
];

echo "<h1> Вывожу месяца года </h2>";

    
    
$i = 0;
while($i < count($arrayMonth)){
   
    foreach($arrayMonth[$i] as $month) {
        echo " $i $month <br/>";
    }
    $i++;
}

// задание 5


$resource = file_get_contents('data.json');
$data = json_decode($resource);
// print_r($data);

echo "Вывожу года </br>";

foreach($data->years as $year) {
    echo $year . PHP_EOL;
}

// задание 6

/**
 * Запрос выполнится при условии, что база данных существует и указаны правильные пароль
 * и пользователь. Запрос выбирает все данные из таблицы пользователей.
 * Данный алгоритм вернет объект соединения с базой данных.
 * 
 * Запрос на удаления списка ids
 * DELETE FROM `users` WHERE `id` in(1,2,3,4,5);
 * DELETE FROM `news` WHERE `id` BETWEEN 1 AND 5;
 * 
 */
$host = 'localhost';
$user = 'user';
$password = '123';
$db = 'DB';

$connect = mysqli_connect($host,$user,$password,$db);
$query = "SELECT * FROM users WHERE id = 1";
$result = mysqli_query($connect, $query);
var_dump(mysqli_fetch_assoc($result));