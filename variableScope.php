<?php

// variable scope
/*
    scope variable adalah dibagian mana saja sebuah variable bisa diakses
    php memiliki tiga jenis variable scope
    - global
    - local
    - static

    - GLOBAL SCOPE :
        - variable yang dibuat diluar function memiliki scope global
        - variable di scope global hanya bisa diakses dari luar function
        - artinya di dalam function, kita tidak bisa mengakses variable di global scope
    - LOCAL SCOPE
        - variable yang dibuat di dalam function memiliki scope local
        - variable di scope local hanya bisa diakses dari dalam function itu sendiri
        - artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain
    - GLOBAL KEYWORD
        - namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global
        - dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global scope dari dalam function
    - $GLOBAL VARIABLE
        - selain menggunakan global keyword, setiap variable yang dibuat di global scope secara otomatis akan disimpan di dalam array $GLOBAL oleh PHP
        - jadi kita bisa menggunakan $GLOVBAL variable dengan key nama variablenya dari dalam function jika ingin mengakses global variable
        - $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun
    - STATIC SCOPE  
        - secara default local variable itu siklus hidupnya hanya sebatas functionnya dieksekusi
        - jika sebuah function selesai dieksekusi, maka siklus hidup local variablenya selesai
        - php memiliki scope yang bernama static
        - static scope hanya bisa di set ke local variable
        - saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
        - artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya
*/

// kode variable global scope
// $name = "M Usman Maulana"; // global scope
// function sayName(){
//     echo $name; // error
// }
// sayName();

// kode variable local scope
// function createName(){
//     $name = "Eko"; // local scope
// }

// createName();
// echo $name; // error

// kode global keyword
// $name = "Usman";
// function sayName(){
//     global $name; // global keyword
//     echo "Hello $name" . PHP_EOL;
// }
// sayName();

// kode $GLOBAL VARIABLE
$name = "Usman";
function sayName(){
    echo "Hello {$GLOBALS['name']}" . PHP_EOL;
}
sayName();

function increment(){
    static $counter = 1;
    echo "Counter : $counter" . PHP_EOL;
    $counter++;
}
increment();
increment();
increment();