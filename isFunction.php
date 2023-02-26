<?php

// is function
/*
php memiliki banyak sekali function dengan prefix is_
function function ini rata rata digunakan untuk mengecek tipe data dari sebuah data
*/

// contoh is function
/*
is_string(), KETERANGAN, apakah tipe data string
is_bool(), KETERANGAN, apakah tipe data boolean
is_int(), KETERANGAN, apakah tipe data number integer
is_float(), KETERANGAN, apakah tipe data number floating point
is_array(), KETERANGAN, apakah tipe data array
is_callable(), KETERANGAN, apakah tipe data callable
*/

$data = "sample";
var_dump(is_string($data));
var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_callable($data));