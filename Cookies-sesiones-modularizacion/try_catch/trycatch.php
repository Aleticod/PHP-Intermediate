<?php

try {
    $resultado = 20 / 0;
    echo $resultado;
} catch (Throwable $e) {
    echo "Ups! Algo salio mas con tu division: " . $e->getMessage();
}

echo "<br>";
echo "hola";