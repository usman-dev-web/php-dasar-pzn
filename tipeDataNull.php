<?php

$name = "Usman";
$name = null;
echo $name;
// $name = "Maulana";

$age = null;
$age = 20;
echo $age;
echo "\n";

// mengecek apakah ada variable yang valuenya null
echo "apakah data null";
var_dump(is_null($name));

// menghapus variable beserta valuenya dengan function unset
$contoh = "Contoh";
unset($contoh);
// var_dump($contoh);

// mengecek variable apakah ada dan valuenya tidak null
var_dump(isset($age));