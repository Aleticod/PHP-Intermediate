<?php 

function get_person_info($name, $age, $country) {
    echo "Tengo la informacion de $name, tienen $age y vive en $country";
}

get_person_info(
    age: 14,
    country: "mexico",
    name: "Pandacio"
);