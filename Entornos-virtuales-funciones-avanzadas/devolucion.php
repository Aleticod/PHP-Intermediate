<?php

function suma(int $n1, int $n2) : int {
    return $n1 + $n2;
}

echo suma(4, 6);

class Dummy {}


function clases(Dummy $n1, int $n2) : void {

}

echo clases( new Dummy, 3);