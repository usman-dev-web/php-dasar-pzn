<?php

// foreach digunakan untuk mengakses seluruh data di array secara otomatis
$names = ["M", "Usman", "Maulana"];
foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

// mengakses data array menggunakan key mapping
$datas = [
    "name" => "Usman",
    "city" => "Pandeglang",
    "province" => "Banten",
];
foreach ($datas as $data => $value) {     // $data akan mengandung key dari array dan $value akan mengandung isi dari key array tersebut
    echo "$data : $value" . PHP_EOL;
}
