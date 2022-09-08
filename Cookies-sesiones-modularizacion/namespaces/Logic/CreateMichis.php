<?php 

require_once "Classes/michisDisponibles/Michi.php";
require_once "Classes/michisAdoptados/Michi.php";

use michisDisponibles\Michi;
use michisAdoptados\Michi as MichiAdoptado;

$mrmichi = new Michi("Mr. Michi", "Black", 5);
$michisansio = new Michi("Michi Sansio", "White", 3);
$michijacinto = new Michi("Michi Jacinto", "Brown", 2);

$mrmichi_adopted = new MichiAdoptado("Michi Jacinto", "2021-05-05", "Juan Perez");

$michisansio_adopted = new MichiAdoptado("Michi Sansio", "2021-05-05", "Juancito");

$michijacinto_adopted = new MichiAdoptado("Michi Jacinto", "2021-05-05", "Jaimito");
