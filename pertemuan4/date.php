<?php 
    //Date  
    //Untuk menampilkan tanggal dengan format tertentu
    //echo date("l, d-M-Y");

    //Time  
    //UNIX Timestamp / EPOCH time
    // echo time();
    //60*60*24*2
    //echo date("d M Y", time()+172800);
    
    //mktime 
    //membuat sendiri detik
    //mktime(0.0.0.0.0.0.0)
    //jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,9,29,1989));

    //strtotime 
    echo date("l", strtotime("25 aug 1989"));

    //String
    // strlen();
    // strcmp();
    // explode();
    // htmlspecialchars();

    //Utility
    // var_dump();
    // isset();
    // empty();
    // die();
    // sleep();

    // User-defined Function  
    
?>