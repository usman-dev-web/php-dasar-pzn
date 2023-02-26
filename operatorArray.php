<?php

// contoh operator pada array di PHP
$data1 = [
    "id" => 01,
    "name" => "Usman",
    "age" => 20,
    "city" => "Pandeglang",
];
$data2 = [
    "id" => 01,
    "age" => 20,
    "name" => "Usman",
];

// $result = $data1 + $data2; // UNION, menggabungkan $data1 dan $data2
// var_dump($result);

// $result = $data1 == $data2; // EQUALITY, true jika $data1 dan $data2 memiliki key/value yang sama
// var_dump($result);

// $result = $data1 === $data2; // IDENTITY, true jika $data1 dan $data2 mempunyai key/value yang sama tetapi juga urutannya sama
// var_dump($result);

// $result = $data1 != $data2; // INEQUALITY, true jika $data1 tidak sama dengan $data2
// var_dump($result);

// $result = $data1 !== $data2; // NON INDENTITY, true jika $data1 tidak sama dengan $data2 value dan urutannya
// var_dump($result);