<?php

function dump_and_die($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();

}

// dump_and_die($_SERVER);

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}