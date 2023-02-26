<?php

/**
 * BREAK digunakan untuk menghentikan seluruh perulangan tidak peduli dengan kondisi bernilai true atau false
 * CONTINUE digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya
 */

// contoh penggunaan break
$counter = 1;
while (true) {
    echo "Ini Counter ke-$counter" . PHP_EOL;
    $counter++;

    // jika $counter melebihi 10, perulangan akan dihentikan
    if ($counter > 10) {
        break;
    }
}

// contoh penggunaan continue
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {            // jika hasil bagi 2 sisa 0, maka perulangan akan dilanjutkan
        continue;
    }
    echo "Counter : $i" . PHP_EOL;
}
