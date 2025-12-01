<?php

$x = $_GET['x'] ?? null;
$y = $_GET['y'] ?? null;

if ($x === null || $y === null || !ctype_digit("$x") || !ctype_digit("$y")) {
    echo "NaN";
    exit;
}

if ($x === '0' || $y === '0') {
    echo "0";
    exit;
}

function gcd($a, $b) {
    while ($b !== '0') {
        $t = $b;
        $b = bcmod($a, $b);
        $a = $t;
    }
    return $a;
}

$gcd = gcd($x, $y);
echo bcdiv(bcmul($x, $y), $gcd, 0);
