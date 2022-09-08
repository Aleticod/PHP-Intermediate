<?php 

// Establecer la zona horaria

date_default_timezone_set("Europe/Madrid");

// Obtener la fecha actual

$now = date("Y-m-d H:i:s");
echo $now;
//$now = date_create();

// strtotime para imprimir la fecha en formato Unix
echo strtotime($now);
echo strtotime("17 April 2022");
echo strtotime("+1 week");
echo strtotime("next monday");
echo strtotime("last sunday");

echo date("Y-m-d H:i:s", strtotime("17 April 2022"));

// Fecha inmutables
$date_immutable = new DateTimeImmutable();

// Diferencia de fechas
$today = new DateTime();
$mrmichi_birth = new DateTime("1985-12-12");
$interval = $mrmichi_birth->diff($today);

echo $interval->format("Han pasado %y años, %m meses y %d días desde que nació MrMichi");

// Crear una fecha desde un formato dado
$date = DAteTime::createFromFormat("l j F Y", "Monday 12 December 1985");
echo $date->format("Y-m-d H:i:s");

// Modificar una fecha
$date = new DateTime();
echo $date->modify("+1 day +2 months");