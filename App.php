<?php

$string = readline("Escribe un string: ");

echo snakeCase($string);


//Methods

function snakeCase(string $string): string {
    $string = blankToUnderscore($string);
    $string = capitalAddsUnderscore($string);
    $string = removesSpecialChar($string);
    $string = trimsUnderscore($string);
    $string = removeManyUnderscore($string);
    $string = strtolower($string);
    return $string;


}

function blankToUnderscore(string $string): string {
    return preg_replace("/ /", "_", $string);
}

function capitalAddsUnderscore(string $string): string {
    return preg_replace('/[A-Z]/', '_$0', $string);
}

function removesSpecialChar(string $string): string {
    return preg_replace('/[^A-Za-z0-9_ ]/', '', $string);
}

function removeManyUnderscore(string $string): string {
    return preg_replace('/_+/', '_', $string);
}

function trimsUnderscore(string $string): string {
    return $string = trim($string, "_");
}






