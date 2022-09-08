<?php 

try {
    $pet = readline("¿Que animal quieres? ");
    if ($pet == "perro") {
        throw new Exception("No tenemos perros");
    } else if ($pet == "gato") {
        throw new Exception("No tenemos gatos");
    } else {
        echo "Tenemos " . $pet;
    }
} catch (Throwable $e) {
    echo "Ups! Algo salio mal: " . $e->getMessage();
}
