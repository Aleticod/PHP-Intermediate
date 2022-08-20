<?php


// ATERAR TEXTO
$text = 'PHP es un LenGuaje';
echo $text;
echo strtolower($text);
# php es un lenguaje
echo '<br>';
echo strtoupper($text);
# PHP ES UN LENGUAJE
echo '<br>';
echo lcfirst($text);
# pHP es un LenGuaje
echo '<br>';
echo ucfirst($text);
# PHP es un LenGuaje
echo '<br>';
// REMPLAZAR
$slug = str_replace(' ', '-', $text);
echo $slug;
# PHP-es-un-LenGuaje
echo '<br>';

// MODIFICACION
$code = 39;
echo str_pad($code, 8, '#', STR_PAD_BOTH);
# ###39###
echo '<br>';
echo str_pad($code, 8, '#', STR_PAD_LEFT);
# ######39

echo '<br>';

// ELEMENTOS MONOBYTE Y MULTIBYTE
echo mb_strtolower($text);