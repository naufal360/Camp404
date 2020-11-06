<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewexport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <center>
            <a href="beranda.php">Beranda |</a>
            <a href="tambah.php">Tambah |</a>
            <a href="hapus.php">Hapus</a>
        </center><br>

        <h2 align="center">Input Mobil</h2>
        <form method="POST">
            <table align="center">
                <tr>
                    <td>Nama Mobil</td>
                    <td>:</td>
                    <td><input type="text" name="nama_mobil"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" name="harga_"></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td>
                        <button type="submit" name="tambah">tambah</button>
                    </td>
                </tr>
            </table>
        </form><br>
        <?php 
            session_start();
            if(isset($_POST['tambah'])){
                $_SESSION['sessmobil'][] = $_POST;
            }
        ?>
    </body>
</html>