<?php


// Password eval
$password = '123457';
# Se necita comprobar que la expresion cumpla
# ciertos requerimientos

var_dump((bool) preg_match('/^[0-9]{6,9}$/', $password));
# El patron nos indica que solo 
# aceptara numeros, con una longitud
# mayor a 6 y menor a 9