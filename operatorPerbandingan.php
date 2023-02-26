<?php

// contoh operator perbandingan
var_dump(10 == "10"); // SAMA DENGAN, true jika 10 sama dengan "10", karena ada type jugling
var_dump(10 === "10"); // IDENTIK, true jika tipe datanya sama 
var_dump(10 > 9); // LEBIH DARI
var_dump(9 < 10); // KURANG DARI
var_dump(10 >= 10); // LEBIH DARI SAMA DENGAN
var_dump(10 <= 10); // KURANG DARI SAMA DENGAN
var_dump(10 != "10"); // TIDAK SAMA DENGAN, true jika tipe datanya sama
var_dump(10 !== "10"); // TIDAK IDENTIK, true jika tipe datanya tidak sama