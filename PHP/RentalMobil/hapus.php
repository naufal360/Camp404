<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewexport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <?php 
        session_start();
    ?>
<body>
    <center>
        <a href="beranda.php">Beranda |</a>
        <a href="tambah.php">Tambah |</a>
        <a href="hapus.php">Hapus</a>
    </center><br>

    <form method="POST" align="center">
        <label for="">Pilih Mobil: </label>
        <select name="nama_mobil">
            <option value="">=== Nama Mobil ===</option>
        <?php
            $namaMobil = $_SESSION['sessmobil'];
            foreach ($namaMobil as $key => $value){
        ?>
            <option value="<?php echo $key; ?>">
                <?php echo $value['nama_mobil'];
                echo " : ";
                echo $value['harga_']; 
                ?>
            </option>
        <?php } ?>
        </select>
        <button type="submit" name="beli">Beli</button>
    </form><br>
    <?php
        if(isset($_POST['beli']))
        {
            $mobil = $_POST['nama_mobil'];
            unset($_SESSION['sessmobil'][$mobil]);
        }
    ?>
