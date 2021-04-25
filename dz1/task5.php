<?php

$bmw = [
    'model' =>'X5',
    'speed' => 120,
    'doors' => 5,
    'years' => 2015
];
$toyota = [
    'model' =>'Corolla',
    'speed' =>150,
    'doors' => 4,
    'years' => 2018
];    
$opel = [
    'model' => 'Corsa',
    'speed' => 130,
    'doors' => 5,
    'years' => 2016
];
$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];
foreach ($cars as $name => $car) {
    echo "CAR $name<br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['years']}<br><br>";
}
