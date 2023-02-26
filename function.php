<?php

/**
 * Function adalah kode program yang akan berjalan saat kita panggil
 * untuk membuat function di php, kita bisa menggunakan kata kunci function, lalu diikuti dengan nama function, kurung() dan diakhiri dengan block
 * kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung()
 * function juga bisa disebut dengna method
 */

// membuat function dengan nama sayHello
function sayhello()
{
    // function ini ketika dipanggil akan menghasilkan output "M Usman Maulana"
    echo "M Usman Maulana" . PHP_EOL;
}

sayhello(); // memanggil function sayHello

/**
 * PHP sangat flexible dalam pembuatan function
 * di PHP kita bebas membuat function dimanapun, bisa di dalam if statement, di dalam function dan sebagainya
 * namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa digunakan
 */

// function didalam if statement
$buat = true; // kondisi

// jika $buat == true maka function hi() akan dibuat, jika false maka tidak akan dibuat dan akan terjadi error
if ($buat) {
    function hi()
    {
        echo "Hi Usman" . PHP_EOL; // value dari funtion hi()
    }
}

hi(); // pemanggilan function hi()

// funtion argument/parameter
/**
 * kita bisa mengirim informasi ke function yang ingin kita panggil
 * kita perlu menambahkan argument atau parameter di function yang sudah kita buat
 * cara membuat argument/parameter sama seperti cara membuat variable
 * argument/parameter ditempatkan didalam kurung() di deklarasi function
 * argument/parameter bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma
 */

// contoh function dengan argument/parameter $name
function name($name)
{
    echo "Hallo $name" . PHP_EOL;
}

name("Usman"); // "Usman" akan masuk kedalam $name

// default argument value
/**
 * PHP mendukung default argument value
 * fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameterm kita bisa menentukan data defaultnya apa
 */

 // contoh function dengan default argument value 
 function address($city = "Pandeglang"){
    echo "Saya tinggal di kota $city" . PHP_EOL;
 }

 address(); // jika argument tidak diisi maka akan menggunakan data default yaitu "Pandeglang", ketika argument diisi maka akan menggunakan argument yang diisi tersebut

 // kesalahan default argument value
 /**
  * default argument value bisa disimpan argument manapun
  * namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna
  */

  // kesalahan default argument value
  function namaLengkap($firstName = "Usman", $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
  }

  namaLengkap("Maulana", "Adit"); // tidak bisa memasukan 1 argument, karena default argument value tidak bisa digunakan

  // Type Declaration
  /**
   * argument di PHP bisa kita masukkan data yang dinamis
   * kadang terlalu dinamis juga menyulitkan juka ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
   * untungnya di PHP kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
   * jika tipe data value tidak sesuai, maka akan terjadi error
   * secara default PHP akan melakukan percobaan konversi tipe data secara otomati, misal jika kita menggunakan tipe int, tapi kita mengirim string
   * maka PHP akan otomatis mengkonversi string tersebut menjadi int
   */

   // Valid Types
   /**
    * Class/Interface = parameter harus tipe class/interface
    * self = parameter harus sama dengan class dimana function ini dibuat
    * array = parameter harus array
    * callable = parameter harus callable
    * bool = parameter harus boolean
    * float = parameter harus floating point
    * int = parameter harus integer number
    * string = parameter harus string
    * interable = parameter harus array atau tipe traversable
    * object = parameter harus sebuah object
    */

    // contoh kode type declaration
    function sum(int $first, int $last){    // int type data yang harus dimasukan
        $total = $first + $last;
        echo "Total : $first + $last = $total" . PHP_EOL;
    }

    sum(10,10);
    sum("100", "20"); // PHP mengkonversi type data string menjadi integer
    sum(true, false); // true di PHP artinya 1, dan false artinya 0

    // Variable-Length Argument List
    /**
     * variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
     * variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
     * variable-length argument list hanya bisa dilakukan di argument posisi terakhir
     * untuk membuat variable-length argument list, kita bisa menggunakan tanda ...(titik tiga kali) sebelum nama argument
     */

     // kode variable-lenght argument list
     function sumAll(...$values){
        $total = 0;
        foreach($values as $value){
            $total += $value;
        }
        echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
     }

     sumAll(10,20,30,40);

     // function return value
     /**
      * secara default, function tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
      * dan didalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
      * kita hanya bisa menghasilkan satu data disebuah function, tidak bisa lebih dari satu
      */

    // kode function return value 1
    function returnValue(int $satu, int $dua){
        return $satu + $dua;
    }

    $hasil = returnValue(10,30);
    var_dump($hasil);

    // kode function return value 2
    function getFinalValue(int $nilai){
        if($nilai >= 80){
            return "A";
        }else if($nilai >= 70){
            return "B";
        }else if($nilai >= 60){
            return "C";
        }else{
            return "D";
        }
    }

    $result = getFinalValue(50);
    var_dump($result);

    // return type declarations
    /**
     * sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya
     * hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
     * untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan : diikuti tipe data kembaliannya
     */

     // kode return type declarations
     function typeDeclarations(int $one, int $two) :int{    // ini akan mengembalikan type data int
        return $one % $two;
     }

     function hello(string $hello) :string{     // ini akan mengembalikan type data string
        return $hello;
     }