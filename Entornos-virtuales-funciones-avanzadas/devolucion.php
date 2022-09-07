<?php

function suma(int $n1, int $n2) : int {
    return $n1 + $n2;
}

echo suma(4, 6);

class Dummy {
    public $un_valor = "Cualquier cosa";
}

function clases(Dummy $n1) : void {
    echo $n1->un_valor;
}

clases( new Dummy);