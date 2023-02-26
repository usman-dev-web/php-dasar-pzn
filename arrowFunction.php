<?php

// Arrow Function
/**
 * arrow function diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih sederhana pembuatannya
 * secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
 * hal yang membedakan di arrow function adalah secara otomatis variable diluar closure bisa digunakan
 * tidak seperti di anonymous function yang harus disebuatkan secara manual menggunakan kata kunci use
 * pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
 * arrow function di khususnya untuk pembuatan function sederhana
 */

 // kode arrow function
 $firstName = "Usman";
 $lastName = "Maulana";
 $sayHello = fn() => "Hello $firstName $lastName" . PHP_EOL;
echo $sayHello();

$sayGoodNight = fn($name = "Usman", $clock = 9.00) => "GoodNight $name, sekarang jam $clock" . PHP_EOL;
echo $sayGoodNight("Maulana", 8.00);