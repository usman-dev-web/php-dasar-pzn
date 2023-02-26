<?php

// variable digunakan untuk menyimpan data, dan bisa digunakan berulang kali ketika dibutuhkan
// variable bisa berubah ubah isi valuenya
$name = "Usman";
$age = 20;

echo "Name : $name" . PHP_EOL;
echo "Age : $age" . PHP_EOL; 

// variable variables
$firtName = "Usman";
$$firtName = "Ganteng";

echo "$firtName $Usman";
echo "\n";
