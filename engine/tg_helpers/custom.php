<?php

// This contains my custom utility functions for Trongate

/**
 * Dump and die
 * 
 * @param mixed $var
 * 
 * @return [type]
 */
function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die();
}