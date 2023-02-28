<?php 
    //     $mahasiswa = [
    //     ["Sandhika Galih", "9273008364", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
    //     ["Gabriel Rolly", "0273008382", "gabrieldavinsi@binus.ac.id", "Teknik Industri"],
    //     ["Ignatius Alexander", "0274008486", "ignatiusalex@ugm.ac.id", "Teknik Sipil"]
    // ];

    //Array Associative
    //key-nya adalah index yang kita buat sendiri
    //kalau pakai array assoiative urutan key nya berubah tidak masalah karena php mengenal key string bukan numeric lagi
    
    $mahasiswa = [
        [
            "nama" => "Sandhika Galih", 
            "nrp" => "0393948849", 
            "email" => "sandhikagalih@unpas.ac.id", 
            "jurusan" => "Teknik Informatika",
            "gambar" => "image3.jpg"
        ], 
        [
            "nama" => "Gabriel Rolly", 
            "nrp" => "0393948810", 
            "email" => "gabrielrolly@binus.ac.id", 
            "jurusan" => "Teknik Industri",
            // "tugas" => [60, 80, 90]
            "gambar" => "image2.jpg"
        ]
    ];

    // echo $mahasiswa[1]["email"];
    // echo $mahasiswa[1]["tugas"][1];

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama: <?= $mhs[0]; ?></li>
        <li>NRP: <?=  $mhs[1]; ?></li>
        <li>Email: <?= $mhs[2]; ?></li>
        <li>Jurusan: <?= $mhs[3]; ?></li>
    </ul>    
    <?php endforeach; ?>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <!-- <img src="img/image2.jpg" ></img> -->
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama: <?= $mhs["nama"]; ?></li>
            <li>NRP: <?=  $mhs["nrp"]; ?></li>
            <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
            <li>Email: <?= $mhs["email"]; ?></li>
        </ul>    
    <?php endforeach; ?>

</body>
</html>