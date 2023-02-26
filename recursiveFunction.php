<?php

// recursive function
/**
 * recursive function adalah kemampuan memanggil function dirinya sendiri
 * kadang memang ada banyak problem yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial
 */

 // kode factorial loop
 function factorialLoop(int $value) :int {
    $total = 1;
    for($i = 1; $i <= $value; $i++){
        $total *= $i;
    }
    return $total;
 }
 var_dump(factorialLoop(6));

 // kode factorial recursive
 function factorialRecursive(int $value):int{
    if($value == 1){
        return 1;
    }else{
        return $value * factorialRecursive($value -1);
    }
 }
 var_dump(factorialRecursive(6));

 // Problem dengan recursive
 /**
  * kita perlu berhati-hati jika recursive terlalu dalam, maka akan adan kemungkinan terjadi memory overflow, yaitu error dimana
  * memory terlalu banyak digunakan di PHP, Problem ini bisa terjadi karena kita memanggil function, PHP akan menyimpannya
  * dalam stack, jika function tersebut memanggil function lain, maka stack akan menumpuk terus dan jika terlalu banyak maka
  * akan membutuhkan konsumsi memory besar, jika sudah melewati batas, maka akan terjadi error memory
  */