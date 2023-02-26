<?php

// callback function
/**
 * callback function adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argument
 * hal ini sebenarnya sudah kita lakukan di materi variable function dan anonymous function
 * namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable
 * dan untuk memanggil callback funtion tersebut, kita bisa menggunakan function call_user_func(callable, arguments)
 */

 // kode callback function 
 function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
 }

 sayHello("Usman", function($name){return strtoupper($name);});
 sayHello("usman", fn($name) => strtoupper($name));


 // Definisikan sebuah fungsi callback
function greeting($name) {
    echo "Hello, $name!" . PHP_EOL;
}

// Definisikan fungsi lainnya yang menerima fungsi callback sebagai parameter
function processInput($input, $callback) {
    $callback($input);
}

// Panggil fungsi processInput dengan callback function greeting
processInput("John Doe", "greeting"); // Output: Hello, John Doe!


// Fungsi untuk menghitung jumlah karakter dari sebuah string
function countCharacters($string) {
    return strlen($string);
}

// Fungsi untuk mengubah semua karakter pada string menjadi huruf kapital
function toUpperCase($string) {
    return strtoupper($string);
}

// Fungsi untuk memproses sebuah string dengan menggunakan callback function yang diberikan
function processString($string, $callback) {
    $result = $callback($string);
    echo "Hasil: $result" . PHP_EOL;
}

// Panggil fungsi processString dengan callback function countCharacters
processString("Hello, World!", "countCharacters"); // Output: Hasil: 13

// Panggil fungsi processString dengan callback function toUpperCase
processString("Hello, World!", "toUpperCase"); // Output: Hasil: HELLO, WORLD!