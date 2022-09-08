<?php 


use App\Classes\Michi;
use App\Classes\MichiAdopted;

function createMichis() {
    $mrmichi = new Michi("Mr. Michi", "Black", 5);
    $mrmichi_adopted = new MichiAdopted("Michi Jacinto", "2021-05-05", "Juan Perez");
    echo $mrmichi->sayMeow() . "Me adopto {$mrmichi_adopted->getAdoptedBy()}";
}
