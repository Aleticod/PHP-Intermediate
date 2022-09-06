<?php 
# Parametros por defecto (array)
function sumar_edades($edades = array(12, 15, 35)) {
    return array_sum($edades);
}

echo sumar_edades();
echo sumar_edades(array(15,34,23));

# Trailing como en parametros por defecto
function multiplicar(
    $n1 = 1,
    $n2 = 2,
    $n3 = 3,
    $n4 = 4,
) {
    return $n1 * $n2 * $n3 * $n4; 
}

echo multiplicar();

# Parametro por defecto (class)
class UnaClaseRandom { }
class OtraClaseRandom { }
function receive_a_class ($class = new UnaclaseRandom) {
    echo $class::class;
}

receive_a_class();
receive_a_class(new OtraClaseRandom);

# Parametros por defecto (Los parametros por defecto va a final)

function suma ($n1, $n2 = 6) {
    return $n1 + $n2;
}

echo suma(4);   # $n1 = 4
echo suma(4,8); # $n1 = 4 y $n2 = 8