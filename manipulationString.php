<?php

// mengakses variable didalam string
$name = "Usman";
echo "Haii $name" . PHP_EOL;

// mengakses tiap kata di variable
var_dump($name[2]);

// curly brace, menggabungkan variable dengan string tanpa ada spasi
$holiday = "Holiday";
echo "Bulan ini banyak waktu untuk {$holiday}'s" . PHP_EOL;

// variable parsing
$data1 = (string)100; // mengubah integer menjadi string
var_dump($data1);

$data2 = (int)"100";
var_dump($data2);

$data3 = (float)"1.031";
var_dump($data3);