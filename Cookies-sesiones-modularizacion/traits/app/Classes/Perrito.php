<?php 

namespace App\Classes;
use App\Traits\Pet;

class Perrito {

    use Pet;
    public function sayGuau() {
        echo 'Guau!';
    }

    public function drool () {
        echo 'drool!';
    }
}