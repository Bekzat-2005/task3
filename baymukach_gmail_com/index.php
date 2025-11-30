<?php
// Проверка: x и y - неотрицательные целые (0,1,2,3,...)
function valid($v) {
    return preg_match('/^\d+$/', $v);
}

function gcd_php($a, $b) {
    while ($b != 0) {
        $t = $b;
        $b = $a % $b;
        $a = $t;
    }
    return $a;
}

function lcm_php($x, $y) {
    if ($x == 0 || $y == 0) {
        return "0";
    }
    $g = gcd_php($x, $y);
    // чтобы уменьшить шанс переполнения, сначала делим
    return (string)(int)(($x / $g) * $y);
}

$x = $_GET['x'] ?? null;
$y = $_GET['y'] ?? null;

if (!valid($x) || !valid($y)) {
    echo "NaN";
    exit;
}

echo lcm_php((int)$x, (int)$y);
