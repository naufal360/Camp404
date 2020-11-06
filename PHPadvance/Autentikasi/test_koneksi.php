<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Camp 404 | Tabel</title>
    </head>

    <?php 
        include 'koneksi.php';

        $sql = mysqli_query($connection,'SELECT * FROM user');
    ?>

    <body>
        <h2 align="center">Menampilkan Tabel User</h2>
        <table align="center" border="1">
            <tr>
                <th>Username</th>
                <th>Nama</th>
            </tr>
            <?php while($data = mysqli_fetch_array($sql)){ ?>
            <tr>
                <td><?php echo $data['username']; ?></td>
                <td><?php echo $data['nama']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>

</html>