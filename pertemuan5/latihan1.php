<?php 
    //array
    //variabel yang memiliki banyak nilai
    //pasangan antara key dan value
    //key-nya adalah index yang dimulai dengan 0

    //membuat array
    //cara lama
    $hari = array("Senin", "Selasa", "Rabu");

    //cara baru
    $bulan = ["Januari", "Februari", "Maret"];

    //elemen pada array boleh memiliki tipe data yang berbeda
    $arr1 = [123, "tulisan", false];

    //menampilkan array
    //var_dump() / print_r()
    // var_dump($hari);
    // echo"<br>";   
    // print_r($bulan);
    // echo"<br>";  

    //menampilkan satu elemen pada array 
    // echo $arr1[0];
    // echo"<br>";  
    // echo $bulan[1];

    //menambahkan elemen baru pada array  
    var_dump($hari);
    $hari[] = "Kamis";
    echo"<br>";
    var_dump($hari);

?>