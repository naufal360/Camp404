<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=content-width, initial-scale=1.0">
    <title>Camp 404 | Admin</title>
</head>
<style>
    .user {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 50%;
    }
    .user td, .user th{
        border: 1 px solid #ddd;
        padding: 8px;
    }
    .user th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
        color: black 1px;
    }
</style>
<body>
    <?php 
        session_start();
        include 'koneksi.php';

        if($_SESSION['level'] == "") {
            header("location:index.php?pesan=gagal");
        }

        $query = mysqli_query($connection, 'SELECT * FROM user');
    ?>

    <h3>Selamat datang di halaman admin:)</h3>

    <table class="user" align="center">
        <tr>
            <th>Username</th>
            <th>Nama</th>
        </tr>
        <?php while($data = mysqli_fetch_array($query)) { ?>
        <tr>
            <td><?php echo $data['username']; ?></td>
            <td><?php echo $data['nama']; ?></td>
        </tr>
        <?php } ?> 
    </table> <br>

    <center>
        <a href="halaman_admin.php?logout">Logout</a>
    </center>

    <?php 
        if(isset($_GET['logout'])){
            session_start();
            session_destroy();
            header("location:index.php");
        }
    ?>

</body>
</html>