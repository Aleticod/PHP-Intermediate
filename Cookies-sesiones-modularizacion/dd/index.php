<?php

require_once "vendor/autoload.php";

class Michi {
    protected $patas = [];
    protected $color;

    public function __construct(string $color) {
        $this->color = $color;

        for ($i = 0; $i < 4; $i++) {
            $this->patas[$i] = new PataDeMichi();
        }
    }
}

class PataDeMichi {
    protected $nails = 4;
    protected $description = 'Tiene manchitas';

    public function get_description() : string {
        return $this->description;
    } 
}

$casa_de_michis = array(
    "nombre" => "michilango",
    "ubicacion" => [
        "pais" => "mexico",
        "ciudad" => "mexico",
        "colonia" => "Doctores",
        "numero" => 123
    ],
    "numero_de_michis" => 10,
    "michis" => [
        new Michi("blanco"),
        new Michi("negro"),
        new Michi("gris"),
    ]
);


dd($casa_de_michis);
