<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Page</title>
</head>

<?php
    session_start();
    include 'koneksi.php';

    $id_user    = $_SESSION['id_user'];

    if($id_user == null)
    {
        header("location:login.php");
    }
    else
    {
        if(isset($_POST['simpan']))
        {
            try {
                $NIS        = $_POST['NIS'];
                $Nama       = $_POST['Nama'];
                $username   = $_POST['username'];
                $password   = $_POST['password'];

                $data_user  = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', 2)";
                if ($connection->query($data_user) == TRUE) {
                    $id_user    = mysqli_insert_id($connection);
                    $data_siswa = "INSERT INTO siswa (user_id, NIS, Nama) VALUES ('$id_user', '$NIS','$Nama')";
                    if($connection->query($data_siswa) == TRUE) {
                        echo "<script> alert('Tambah Data Berhasil !!');
                            window.location.replace('home.php');
                        </script>";
                    } else{
                        $connection->query('delete from users where id = '.$id_user);
                    }
                } else {
                    echo "Error: ".$query . "<br>" . $connection->error;
                }
            } catch (\Throwable $e) {
                echo $e->getMessage();
            }
        }
    }
?>

<body>
<h2 align="center">Form Tambah</h2>
    <br>
    <form method="POST">
            <table align="center">
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type="number" name="NIS" required="required"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="Nama" required="required"></td>
                </tr>
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
                    <td>
                        <input type="submit" name="simpan" value="SIMPAN">
                        <button type="button"><a href="home.php?">KEMBALI</a></button>
                    </td>
                </tr>
            </table>
    </form>
</body>
</html>