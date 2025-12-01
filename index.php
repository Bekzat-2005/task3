<?php
error_reporting(0);
ini_set('display_errors', 0);

function valid($v) {
    return is_string($v) && preg_match('/^\d+$/', $v);
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
    if ($x == 0 || $y == 0) return "0";
    return (string)(($x / gcd_php($x, $y)) * $y);
}

$x = $_GET["x"] ?? null;
$y = $_GET["y"] ?? null;

if (!valid($x) || !valid($y)) {
    echo "NaN";
    exit;
}

echo lcm_php($x, $y);