<?php

// contoh array function
/**
 * array_keys() KETERANGAN, mengambil semua keys milik array
 * array_values() KETERANGAN, mengambil semua values milik array
 * array_map() KETERANGAN, mengubah semua data array dengan callback
 * sort() KETERANGAN, mengurutkan array
 * rsort() KETERANGAN, mengurutkan array terbalik
 * shuffle() KETERANGAN, mengubah posisi data di array secara random
 */

 $data = [1,2,3,4,5,6,7,8,9,10];
 var_dump(array_map(fn($data) => $data * 2, $data));
 var_dump(array_values($data));
 var_dump(array_keys($data));
 sort($data);
 rsort($data);
 var_dump($data);
 shuffle($data);
 var_dump($data);