<?php

echo 'Un texto de una linea
varias lineas
comillas simples \' backslash \\ continuar con mas text
$variable <br>';

$name = "Italo";

echo "Mi nombre es : $name <br>";

$courses = [
    'backend' => [
        'php',
        'Laravel'
    ]
    ];

echo "{$courses['backend'][0]} <br>";

# Acceso a variables dinamicamente ${$variable}
$teacher= 'italo';
$italo = 'Profesor de PHP';

echo "$teacher es ${$teacher} <br>";

function getTeacher() {
    return 'teacher';
}

$teacher = 'Italo';

echo "{${getTeacher()}} ensena PHP";
