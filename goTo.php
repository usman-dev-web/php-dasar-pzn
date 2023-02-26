<?php

/**
 * goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
 * agar goto bisa loncat ke kode program, kita harus membuat label di php dengan menggunakan nama label lalu diakhiri :
 */

// contoh goto sederhana
goto b; // kode ini akan langsung mengeksekusi kode program yang diberi label b:
echo "Hello A" . PHP_EOL; // kode ini akan diskip oleh php

b:
echo "hello B" . PHP_EOL;

// contoh goto didalam looping
$counter = 1;
while (true) {
    echo "While loop $counter", PHP_EOL;
    $counter++;

    // ketika $counter lebih dari 10, maka kode program akan langsung mengeksekusi kode dengan label endL:
    if ($counter > 10) {
        goto end;
    }
}

end:
echo "end loop" . PHP_EOL;
