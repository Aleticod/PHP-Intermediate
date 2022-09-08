<?php 

if ( !isset($_cookie["example_cooke"])) {
    
    setcookie(
        name: "example_cookie",
        value: "un michi salvaje aparecio",
        expires_or_options: time() + 60,
        path: "/",
        domain: "localhost",
        secure: false,
        httponly: true,
    
    );
    
    echo "Cookie creada";
}


echo "<pre>";

var_dump($_COOKIE);
?>