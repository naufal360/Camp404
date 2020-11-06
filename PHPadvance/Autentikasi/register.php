<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camp404 | Pendaftaran</title>
</head>   
<?php
    include 'koneksi.php';
    session_start();

    if(isset($_POST['register']))
    {
        try{
            $username   = $_POST["username"];
            $nama       = $_POST["nama"];
            $password   = $_POST["password"];
            $level      = $_POST["level"];

            $sql = "INSERT INTO user (username, nama, password, level) VALUES
            ('$username', '$nama', '$password', 2)";

            if ($connection->query($sql)==TRUE){
                echo "<script> alert('Registrasi Berhasil !!');
                window.location.replace('index.php');</script>";
            } else{
                echo "Error: " .$sql . "<br>" . $connection->error;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
?>
<body> 
    <form method="POST">
        <table align="center">
            <input type="hidden" class="form_login" name="level">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" class="form_login" name="nama"
                required="required"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" class="form_login" name="username"
                required="required"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" class="form_login" name="password"
                required="required"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="password" class="form_login" name="register"
                    value="register">REGISTER</button>
                    <button type="button"><a href="index.php">KEMBALI</a></button>
                </td>
            </tr>
        </table>
    </form>        
</body>
</html>
