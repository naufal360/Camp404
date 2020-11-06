<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camp 404 | Login</title>
</head>
<?php 
    session_start();
    include 'koneksi.php';

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login  = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password'");
        $cek    = mysqli_num_rows($login);

        if($cek != null){
            $data = mysqli_fetch_array($login);

            if($data['level'] == 1){
                $_SESSION['username'] = $username;
                $_SESSION['level'] = 1;
                header("location:halaman_admin.php");
            } else if($data['level'] = 2){
                $_SESSION['username'] = $username;
                $_SESSION['level'] = 2;
                header("location:halaman_user.php");
            } else {
                header("location:index/php?pesan=gagal");
            }
        }
        else{
            header("location:index.php?pesan=gagal");
        }
    }
?>

<body>
    <center>
    <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
            }
        }
        ?>
    </center>
    <form method="POST">
        <table align="center">
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" class="form_login" name="username" required="required"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" class="form_login" name="password" required="required"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button type="submit" class="btn_login" name="login">Login</button></td>
            </tr>
        </table>

        <center>
            <p>Apakah sudah memiliki akun?</p>
            <p>Jika belum silahkan lakukan <a href="registrasi.php">register</a></p>
        </center>
    </form>
</body>
</html>