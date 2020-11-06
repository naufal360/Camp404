<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<?php 
    session_start();
    include 'koneksi.php';

    $id_user        = $_SESSION['id_user'];

    if($id_user == null){
        header("location:index.php");
    } else {
        $data
    }

?>

<body>
    <h2 align="center">Form Edit</h2>
    <br>
    <form method="POST">
        <table align="center">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="number" name="NIS" value="<?php echo $siswa['NIS'] ?>" required="required"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="Nama" value="<?php echo $siswa['Nama']?>" required="required"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" value="<?php echo $siswa['username']?>" required="required"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" value="<?php echo $siswa['password']?>" required="required"></td>
            </tr>
            <tr>
                <td colspan=2></td>
                <td>
                    <input type="submit" name="update" value="UPDATE">
                    <button type="button"><a href="home.php?">KEMBALI</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>