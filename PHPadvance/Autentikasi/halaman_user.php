<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=content-width, initial-scale=1.0">
    <title>Camp 404 | Halaman User</title>
</head>
<body>
    <?php
        session_start();
        
        if($_SESSION['username'] == null){
            header("location:index.php?pesan=gagal");
        } else{
            if($_SESSION['level'] == ""){}
        }

        if(isset($_GET['logout'])){
            session_start();
            session_destroy();
            header("location:index.php");
        }
    ?>

    <h2 align="center"> Anda Berhasil Login !</h2>
    <h2 align="center"> Hai <?php echo $_SESSION['username']; ?>, Selamat datang di Halaman User</h2>
    <center>
        <a href="halaman_user.php?logout">Logout</a>
    </center>
</body>
</html>