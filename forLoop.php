<?php

// loop adalah satu kata kunci yang bisa digunakan untuk melakukan perulangan
// blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi

// for(init statement; kondisi; post statement){
//     // blok perulangan
// }

/**
 * Init statement akan dieksekusi hanya sekali diawal sebelum perulangan
 * kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
 * post statement akan dieksekusi setiap kali diakhir perulangan
 * init statement, kondisi dan post statement tidak wajib diisi, jika kondisi tidak diisi, berarti kondisi selalu bernilai true
 */

for ($i = 1; $i <= 10; $i++) {
   echo "Ini adalah Loop Ke-$i" . PHP_EOL;
}

for ($i = 10; $i >= 1; $i--) {
   echo "Ini adalah Loop Ke-$i" . PHP_EOL;
}
