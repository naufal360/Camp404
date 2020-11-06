<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Sekolah</title>
</head>
<?php
    session_start();
    include 'koneksi.php';
    if(isset($_POST['submit']))
    {
        $id_user    = $_POST['id_user'];
        $username   = $_POST['username'];
        $password   = $_POST['password'];

        $login  = mysqli_query($connection, "SELECT * FROM users WHERE username='$username' AND password='$password'");
        $cek    = mysqli_num_rows($login);
        
        if($cek > 0)
        {
            $data = mysqli_fetch_assoc($login);
            if($data['level'] == 1)
            {
                $_SESSION['username']   = $username;
                $_SESSION['level']      = 1;
                $_SESSION['id_user']    = $data['id_user'];
                header("location:home.php?admin");
            }
            else if ($data['level'] == 2)
            {
                $_SESSION['username']   = $username;
                $_SESSION['level']      = 2;
                $_SESSION['id_user']    = $data['id_user'];
                header("location:home.php?user");
            }
            else
            {
                header("location:index.php?pesan=gagal");
            }
        }
        else
        {
            header("location:index.php?pesan=gagal");
        }
    }
?>

<body>
    <h2 align="center">Form Login</h2>
    <form method="POST">
        <table align="center">
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" required="required"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" required="required"></td>
            </tr>
            <tr>
                <td colspan=2></td>
                <td><input type="submit" name="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
</body>
</html>