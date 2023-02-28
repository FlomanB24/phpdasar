<?php 
    $mahasiswa = [
        ["Sandhika Galih", "9273008364", "Teknik Informatika", "sandhikagalih@unpas.ac.id"],
        ["Gabriel Rolly", "0273008382", "Teknik Industri", "gabrieldavinsi@binus.ac.id"],
        ["Ignatius Alexander", "0274008486", "Teknik Sipil", "ignatiusalex@ugm.ac.id"],
    ];

?>

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

    <!-- <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs;  ?></li>
        <?php endforeach; ?>
    </ul> -->

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0]; ?></li>
            <li>NRP :<?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>Email :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach ?>
    
</body>
</html>