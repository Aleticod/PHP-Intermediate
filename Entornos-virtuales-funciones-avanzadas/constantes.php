<?php 

define("Michi", "Mr. Michi");
const PI = 3.1416;

$desicion = true;

if ($desicion) {
    echo PI;
}

if ($desicion) {
    define("aux", 34);
    echo aux;
}

echo E_ERROR;
echo "\n";
echo PHP_VERSION;
echo "\n";
echo __DIR__;
echo "\n";
echo PHP_OS;
