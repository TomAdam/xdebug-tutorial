<?php

function factorial($number) {
    if ($number == 2) {
        throw new \RuntimeException('Whoops!');
    }

    if ($number == 1) {
        return $number;
    }

    return $number * factorial($number - 1);
}

try {
    factorial(6);
} catch (\RuntimeException $e) {
    throw new \Exception($e->getMessage());
}
