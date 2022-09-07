<?php 

$cajero = 0;

$add_cajero = fn($add) => $cajero + $add;


echo $add_cajero(20);
echo $cajero;


$edades = [5, 21, 50, 9];
$mayores_de_edad = array_filter($edades, fn($current) => $current>=18);

print_r($mayores_de_edad);