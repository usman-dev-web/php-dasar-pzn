<?php

// contoh penggunaan switch yang lebih simple daripada if else

$nilai = "E";

switch ($nilai) {
    case "A"; // jika case == $nilai maka jalankan statement dibawah
        echo "Selamat Anda Lulus Dengan Sangat Baik" . PHP_EOL;
        break; // sebagai penutup setiap case
    case "B";
    case "C";
        echo "Anda Lulus" . PHP_EOL;
        break;
    case "D";
        echo "Anda Tidak Lulus" . PHP_EOL;
        break;
    default; // statement yang akan dijalankan ketika tidak ada yang sesuai dengan $nilai
        echo "Mungkin Anda Salah Jurusan" . PHP_EOL;
}
