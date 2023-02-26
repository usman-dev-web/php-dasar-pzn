<?php

// Anonymous function
/**
 * anonymous function adalah funtion tanpa nama, di PHP disebut juga dengan closure
 * anonymous funtion biasanya digunakan sebagai argument atau sebagai value di variable
 * anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya
 */

// kode anonymous function
$sayHello = function ($name) {
    echo "Hello $name" . PHP_EOL;
};
$sayHello("Usman");
$sayHello("Maulana");

// anonymous function sebagai argument/parameter
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "GoodBye $finalName" . PHP_EOL;
}
sayGoodBye("Usman", function ($name) {
    return strtoupper($name);
});

// Mengakses variable diluar closure
/**
 * secara default, anonymous function tidak bisa mengakses variable yang terdapat diluar function
 * jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara
 * explicit menyebutkannya menggunakan kata kunci "use" lalu diikuti variable-variable yang ingin kita gunakan
 */

// kode mengakses variable luar
$firstName = "Usman";
$lastName = "Maulana";
$sayHelloUsman = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};
$sayHelloUsman();
