<?php

// VALORES
function greet($name) {
    return "Hola, $name";
}
# Mediante el argumento le pasamos el valor de $name
echo greet('Italo');

// REFERENCIA
$course = 'PHP';

function path(&$c) {
    $c = 'Laravel';
    echo $c;
}

path($course);
# Laravel
echo $course;
# Laravel

// PREDETERMINADO
function other_greet($name = 'iTALO') {
    return "Hola, $name";
}
# Mediante el argumento le pasamos el valor de $name
echo greet();
echo greet('Abel');