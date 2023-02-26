<?php

// posisi require dan include
/*
    kode program PHP akan dibaca dari atas kebawah, oleh karena itu pastikan posisi require dan include sesuai dengan yang kita inginkan
    misal jika sampai salah menempatkan posisi require dan include, bisa jadi kita malah memanggil function yang belum ada
*/

include_once "myFunction.php";
echo sayHello("Usman", "Maulana");

// require_once dan include_once
/*
    function require dan include akan selalu mengambil file yang kita inginkan
    jika kita beberapa kali menggunakan require dan include file yang sama, maka file tersebut akan berkali kali pula kita ambil
    hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function
    untungnya di php terdapat function require_once dan include_once, function ini bisa mendeteksi jika sebelumya kita pernah mengambil file yang sama, maka tidak akan diambil lagi
*/