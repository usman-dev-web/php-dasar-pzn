<?php

// operator penugasan (=)
$total = 0;

$apple = 10;
$orange = 5;
$manggo = 10;

// $total = $total + $apple;
// $total = $total + $orange;
// $total = $total + $manggo;
// var_dump($total);

// contoh diatas bisa dipersingkat penulisannya dengan menggunakan operator penugasan +=
$total += $apple;
$total += $orange;
$total += $manggo;
var_dump($total);

// membuat value menjadi minus dengan menggunakan operator -
var_dump(-$total);

// membuat value menjadi positid dengan menggunakan operator +
var_dump(+$total);