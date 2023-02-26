<?php

// contoh membuat array 

$data1 = array("M", "Usman", "Maulana");
var_dump($data1);

// contoh ke dua
$data2 = ['M', 'Usman', 'Maulana'];
var_dump($data2[2]); // didalam array, data array dimulai dengan index 0, contoh disamping akan menghasilkan data array "Maulana", karena "Maulana" Merupakan index ke 3 dari total 3 data

// membuat array dengan menggunakan mapping(menggantikan index 0 dengan tipe data string ). contoh
$data3 = [
    "id" => "01",
    "name" => "Usman",
    "age" => 20,
];

var_dump($data3["id"]); // ini akan menghasilkan output "01", karena index yang tadinya 0 diganti dengan string "id"

// array didalam array
$data4 = [
    "id" => "02",
    "name" => "Maulana",
    "age" => 20,
    "country" => [
        "city" => "Pandeglang",
        "Province" => "Banten",
    ]
]; // cara mengakses tiap data diatas sama seperti ketika mengakses data array yang ke 3
var_dump($data4["name"]); // ini akan menghasilkan output "Maulana"
var_dump($data4["country"]["city"]); // ini akan menghasilkan output "Pandeglang"

// opertor array
/*
    $array[index] | mengakses data di array pada nomor index
    $array[index] = value | mengubah data di array pada nomor index dengan value baru
    $array[] = value | menambah data di array pada posisi paling belakang
    unset($array[index]) | menghapus data di array, index otomatis hilang dari array
    count($array) | mengambil total data di array
*/
// contoh mengubah data di array
$data2[0] = "Muhammad";
var_dump($data2);

// contoh menambah data baru di array 
$data2[] = "Ganteng";
var_dump($data2);

// contoh menghapus data di array
unset($data2[1]);
var_dump($data2);

// contoh mengambil total data di array
var_dump(count($data2));
