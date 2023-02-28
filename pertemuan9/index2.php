<?php 
    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar2");

    //ambil data dari tabel mahasiswa
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // var_dump($result);

    //ambil data (fetch) mahasiswa dari objek result
    //mysqli_fetch_row  => mengembalikan array numerik
    // $mhs = mysqli_fetch_row($result); 
    // var_dump($mhs[3]);

    //mysqli_fetch_assoc => mengembalikan key (dalam bentuk string) / mengembalikan array associative
    // $mhs = mysqli_fetch_assoc($result);
    // var_dump($mhs);
    // var_dump($mhs["jurusan"]);

    // while ($mhs = mysqli_fetch_assoc($result)){
    //     var_dump($mhs);
    // }

    //mysqli_fetch_array => mengembalikan array numeri dan assosiatif (kekuarangannya adalah data yang ditambilkan double)
    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs);
    // var_dump($mhs["jurusan"]);

    //mysqli_fetch_object
    // while ($mhs = mysqli_fetch_object($result)){
    //     var_dump($mhs->nama);
    // }
    // var_dump($mhs["jurusan"]);

    // cek error
    // if (!$result){
    //     echo mysqli_error($conn);
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1 ; ?>
        <!-- lurung kurawalnya bisa diganti dengan : (titik dua)   -->
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>

        </tr>
        <?php $i++; ?>
        <?php endwhile ; ?>

    </table>
</body>
</html>