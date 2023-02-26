<?php

// require dan include
/*
    saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file
    lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk di satu file
    PHP memiliki function require dan include yang bisa kita gunakan untuk mengambil file php lain
    lantas apa bedanya require dan include?
    pada require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
    pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan
*/

function sayHello(string $firstName, string $lastName):string{
    return "Hello $firstName $lastName";
}