<?php

$bwm = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'Camry',
    'speed' => 110,
    'doors' => 5,
    'year' => 2016
];

$opel = [
    'model' => 'Astra',
    'speed' => 100,
    'doors' => 3,
    'year' => 2017
];

$cars = ['bmw'=>$bwm, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $name => $car) {
    echo "CAR $name<br> ";
    echo "{$car['model']} - {$car['speed']} - {$car['doors']} - {$car['year']} <br><br> ";
}