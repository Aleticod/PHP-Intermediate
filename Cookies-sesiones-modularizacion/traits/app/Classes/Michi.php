<?php 

namespace App\Classes;

use App\Traits\Pet;

class Michi {

    use Pet;

    public function sayMeow() {
        echo 'Meow!';
    }

    public function scratch () {
        echo 'Scratch!';
    }
}