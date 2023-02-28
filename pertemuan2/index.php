<?php 
    //ini adalah komentar untuk satu baris -> ctrl+slash
    /*ini adalah komentar untuk banyak baris */

    //Sintax PHP 
    /* Standar output:
    echo, print 
    print_r
    var_dump (untuk melihat isi dari variabel dan mencari tahu variabel)*/

    // echo "Gabriel Rolly";
    // print "Gabriel Rolly\n";
    // print_r ("Gabriel Rolly");
    // var_dump ("Gabriel Rolly");

    //Penulisan sintax php   
    //1. PHP di dalam HTML
    //2. HTML di dalam PHP

    //variabel (tidfak boleh menggunakan spasi dalam penamaannya)
    //tidak boleh diawali dengan angka, tetapi boleh mengandung angka
    $nama = "Davinsi";

    //interpolasi berkaitan dengan juga dengan penggunaan tanda petik dua dan petik satu
    //kalau dalam kalimat ada penggunaan petik satru maka sebaiknya gunakan petik dua untuk tag pembuka dan penutup
    //kalau menggunakan variabel harus menggunakan petik dua agara isi variabelnya bisa diambil. Karena jika menggunakan petik satu maka dianggap sebagai kalimat biasa variabelnya
    // echo "Hallo, nama saya $nama";

    // Operator 
    // aritmatika (bisa digunakan langsung, bisa juga dimasukan ke dalam variable)  
    // + - * / % 
    //$x = 10;
    //$y = 20;
    //echo $x * $y; 

    //penggabung string / concatenation / concat
    // .
    $nama_depan = "Gabriel";
    $nama_belakang = "Rolly";
    echo $nama_depan. " " .$nama_belakang; 

    //Assignment
    //=, +=, -=, *=, /=, %=, .=   
    $x = 1;
    $x += 5;
    echo $x;

    $name = "Gabriel";
    $name .= " ";
    $name .= "Davinsi";
    echo $name;

    //Perbandingan (tidak mengecek tipe data tetapi hanya nilainya)
    // <, >, <=, <=, ==, !=
    var_dump(1 < 5);
    var_dump(1 == "1");

    //Identitas (mengecek tipe data dan nilai)
    // ===, !==
    var_dump(1 === "1");

    //Logika  
    // &&, ||, !
    $x = 10;
    var_dump($x < 20 && $x %2 == 0);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <!-- php di dalam HTML -->
    <!-- <h1>Hallo, Selamat datang <?php echo "Gabriel"; ?></h1> -->
    <h1>Hallo, Selamat datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

    <!-- html di dalam php  -->
    <?php 
        echo "<h1>Hallo, Selamat datang Gabriel</h1>";
    ?>
</body>
</html>