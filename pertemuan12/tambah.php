<?php 
    //koneksi ke dbms
    // $conn = mysqli_connect("localhost", "root", "", "phpdasar2");

    require 'functions.php';

    //cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){

        if (tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }

        // if (tambah($_POST) > 0){
        //     echo "data berhasil ditambahkan!";
        // }else{
        //     echo "data gagal ditambahkan";
        // }

        // var_dump($_POST);

        //ambil data dari tiap elemen dalam form 
        // $nama = $_POST["nama"];
        // $nrp = $_POST["nrp"];
        // $email = $_POST["email"];
        // $jurusan = $_POST["jurusan"];
        // $gambar = $_POST["gambar"];

        //query insert data
        // $query = "INSERT INTO mahasiswa
        //         VALUES 
        //         ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
        //         ";

        // mysqli_query($conn, $query);

        //cek apakah data berhasil ditambahkan atau tidak
        // if(mysqli_affected_rows($conn) > 0){
        //     echo "berhasil";
        // }else{
        //     echo "gagal!";
        //     echo "<br>";
        //     echo mysqli_error($conn);
        // }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>

    </form>
    
</body>
</html>