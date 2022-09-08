<?php 

try {
    $resultado = 20 / 0;
    echo $resultado;
} catch (Throwable $e) {

    echo $e->getMessage();
    echo "<br>";
    echo $e->getLine();
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
    echo $e->getTraceAsString();
    echo "<br>";
    var_dump ($e->getTrace());
    echo "<br>";
    echo $e->getCode();
    echo "<br>";
    echo $e->getPrevious();
    echo "<br>";
}