<?php

// null coalescing operator untuk mengecek sebuah variable ada dan tidak null maka akan dikembalikan operan pertama, jika tidak ada maka akan dikembalikan operan kedua
// null coalescing operator mengunakan tanda ??
$data = [
    // "action" => "Hallo Usman"
];

$username = $data['action'] ?? "Bukan Usman";
echo $username;
