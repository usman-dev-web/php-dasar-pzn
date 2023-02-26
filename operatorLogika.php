<?php

// contoh operator logika
var_dump(true && true); // true jika keduanya bernilai true
var_dump(true && false);

var_dump(true || false); // true jika salah satu bernilai true atau keduanya true
var_dump(true || true);

var_dump(!true); // true jika $a bernilai false, intinya kebalikannya
var_dump(!false); // ini akan menghasilkan nilai true

var_dump(true xor true); // true jika salah satunya bernilai true tapi tidak keduanya
var_dump(true xor false);