<?php

// Do While Loop
/**
 * Pengecekan di do while loop dilakukan setelah perulangan dilakukan
 * oleh karena itu dalam do while loop minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true
 */

 $counter = 100;
 do{
    echo "Ini adalah perulangan do while ke-$counter" . PHP_EOL;
    $counter++;
 } while($counter <=10);