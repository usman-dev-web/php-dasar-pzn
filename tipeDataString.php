<?php

echo 'name : ';
echo 'M Usman Maulana';

// untuk menambahkan enter
echo "\n";

echo "name : ";
echo "M\t Usman Maulana";

// menggunakan Heredoc sama seperti menggunakan double quote
echo <<<TEXT
Ini adalah contoh penggunaan
heredoc, sama seperti ketika menggunakan double quote
yaitu memiliki kemampuan untuk parsing variable

TEXT;

// menggunakan Nowdoc sama seperti menggunakan single quote
echo <<<'TEXT'
Ini adalah contoh penggunaan
nowdoc, sama seperti ketika menggunakan single quote
yaitu tidak memiliki kemampuan untuk parsing variable
TEXT;