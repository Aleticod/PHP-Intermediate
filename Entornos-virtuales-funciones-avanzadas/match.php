<?php 

function get_country_name_match($country) {
    return match ($country) {
        "MX" => "Mexico",
        "COL" => "Colombia",
        "EUA" => "Estados Unidos Americanos",
        default => "Lo siento, no conozco ese pais"
    };
}

echo get_country_name_match("MX");