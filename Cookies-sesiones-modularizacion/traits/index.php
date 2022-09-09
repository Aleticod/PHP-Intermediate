<?php 

require_once "vendor/autoload.php";

use App\Classes\Michi;
use App\Classes\Perrito;

$firulais = new Perrito();
$mrmichi = new Michi();

echo $firulais->sayGuau();
echo "\n";
echo $firulais->play();
echo "\n";
echo $mrmichi->sayMeow();
echo "\n";
echo $mrmichi->sleep();