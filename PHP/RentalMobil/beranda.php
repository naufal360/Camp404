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

        <table align="center" border="3" width="30%">
            <?php if(isset($_SESSION['sessmobil'])){?>
                <tr>
                    <td><h3>Nama Mobil</h3></td>
                    <td><h3>Harga</h3></td>
                </tr>
                <?php
                    foreach($_SESSION['sessmobil'] as $x){
                ?>
                    <tr>
                        <td><?php echo $x['nama_mobil']; ?></td>
                        <td><?php echo $x['harga_']; ?></td>
                    </tr>    
                <?php } ?>
            <?php } ?>
        </table> <br>
    </body>
</html>