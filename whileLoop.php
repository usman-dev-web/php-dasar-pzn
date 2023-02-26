<?php

// while Loop adalah versi perulangan yang lebih sederhana dibanding for loop
// di while Loop, hanya terdapat kondisi perulangan tanpa ada init statement dan post statement

$counter = 1;
while ($counter <= 10) {
    echo "hello while loop ke-$counter" . PHP_EOL;
    $counter++;
}
