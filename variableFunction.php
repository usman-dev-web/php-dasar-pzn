<?php

// variable function
/**
 * PHP mendukung konsep yang bernama variable function
 * variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
 * untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), jika ingin menambahkan argument
 * kita bisa menggunakan $namaVariable(argument)
 */

 // kode variable function
 function foo(){
    echo "Foo" . PHP_EOL;
 }

 function bar(){
    echo "Bar" . PHP_EOL;
 }

 $namaVariable = "foo";
 $namaVariable();

 $namaVariable = "bar";
 $namaVariable();

 // penggunaan variable function
 function sayHello(string $name, $filter){
    $fullName = $filter($name);
    echo "Hello $fullName" . PHP_EOL;
 }

 function sampleFunction(string $name) : string{
    return "Sample $name";
 }

 sayHello("Usman", "sampleFunction"); // memanggil function "sampleFunction" dari value parameter
 sayHello("Usman", "strtolower");
 sayHello("Usman", "strtoupper");