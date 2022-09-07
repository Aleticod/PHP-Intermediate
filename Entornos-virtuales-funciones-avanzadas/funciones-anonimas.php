<?php 

# Funciones anonimas
$numbers = [1,2,3,4,5];

$numbers_by_2 = array_map(function($current) {
    return $current * 2;
}, $numbers);

var_dump($numbers_by_2);

# Use word

$michi = "michisaurio";
$change_michi_name = function() use($michi) {
    echo $michi;
};

$change_michi_name();