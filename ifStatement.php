<?php

// contoh penggunaan if, else, else if
$nilai = 80;
$absen = 90;

if ($nilai >= 80 && $absen >= 90) {
    echo "Nilai Kamu A" . PHP_EOL;
} else if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Kamu B" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Kamu C" . PHP_EOL;
} else if ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Kamu D" . PHP_EOL;
} else {
    echo "Nilai Kamu E" . PHP_EOL;
}
