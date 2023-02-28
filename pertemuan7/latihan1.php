<?php 
    //variable scope/lingkup variabel

    //variable local
    // $x = 10;
    // // echo $x;

    // function tampilX() {
    //     global $x;
    //     echo $x;
    // }

    // tampilX();

    //SUPERGLOBAL
    //variable global  => semuanya adalah array associative
    // $_GET
    // $_GET["nama"] = "Sandhika Galih";    
    // var_dump($_GET);

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
            "gambar" => "image2.jpg"
        ]
    ];

    // $_POST
    // $_REQUEST
    // $_SESSION
    // $_COOKIE
    // $_SERVER
    // $_ENV

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>


    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <!-- <ul>
                <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
                <li><?= $mhs["nama"]; ?></li>
                <li><?= $mhs["nrp"]; ?></li>
                <li><?= $mhs["jurusan"]; ?></li>
            </ul> -->
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&
                nrp=<?= $mhs["nrp"]; ?>&
                email=<?= $mhs["email"]; ?>& 
                jurusan=<?= $mhs["jurusan"]; ?>& 
                gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>

        <?php endforeach; ?>
    </ul>




</body>
</html>