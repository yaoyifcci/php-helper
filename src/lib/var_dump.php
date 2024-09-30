<?php

function print_ini_get_prefix(string $prefix): void {
$ini = ini_get_all();
        array_walk($ini, function (&$value, $key) {
            if (str_starts_with($key, 'xdebug')) {
                echo $key . ' => ';
                var_dump($value);
            }
        });
}

