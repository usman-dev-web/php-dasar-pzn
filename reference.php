<?php

// reference
/*
    - reference adalah mengakses variable yang sama dengan nama variable yang berbeda
    - reference di php tidak sama dengan reference di bahasa pemrograman seperti C/C++ yang memiliki fitur pointer
    - analogi reference itu seperti file, jika variable adalah file, dan valuenya adalah isi filenya, maka reference adalah membuat shortcut di windows atau alis di linux
      terhadap file yang sama
    - saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya ikut berubah
    - untuk mmebuat reference terhadap variable, kita bisa menggunakan karakter &
*/

// assign by reference
    // pertama, php reference bisa memungkinkan kita bisa membuat beberapa variable menuju ke value yang sama
// kode assign by reference
$name = "Usman";
$otherName = &$name;
$otherName = "Maulana";
echo $name . PHP_EOL;

// pass by reference
    // selanjutnya yang bisa dilakukan di php adalah mengirim data ke function dengan reference
// kode pass by reference
function increment(int &$value){
    $value++;
}
$counter = 1;
increment($counter);
echo $counter . PHP_EOL;

// returning references
/*
    - php juga bisa mengembalikan reference pada function
    - namun hati hati, gunakan fitur ini jika memang ada alasannya, karena fitur ini bisa membingungkan
*/
// kode returning references
function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;