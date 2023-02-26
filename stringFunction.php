<?php

// contoh string function
/**
 * join() / implode() KETERANGAN, menggabungkan array menjadi string
 * explode() KETERANGAN, memecah string menjadi array
 * strtolower KETERANGAN, mengubah string menjadi lowercase
 * strtoupper KETERANGAN, mengubah string menjadi uppercase
 * substr() KETERANGAN, mengambil sebagian string
 * trim() KETERANGAN, menghapus whitspace di depan dan belakang string
 */

 // kode string function
 var_dump(join("+", [1,2,3,4,5]));
 var_dump(explode(" ", "M Usman Maulana"));
 var_dump(strtolower("USMAN"));
 var_dump(strtoupper("usman"));
 var_dump(substr("M Usman Maulana", 0, 5));
 var_dump(trim("    Usman   "));