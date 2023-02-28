<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<!-- kalau action dikosongkan maka data akan dikirim ke halamannya sendiri dan kalau methodnya tidak diisi maka secara default dia bernilai $_GET-->
    
    <?php if(isset ($_POST["submit"])) : ?>
        <h1>Halo, selamat datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>

    <form action="" method="post">
        
        Masukan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>

    </form>


</body>
</html>