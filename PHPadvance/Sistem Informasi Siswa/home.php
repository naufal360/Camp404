<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<?php
    session_start();
    include 'koneksi.php';

    $username   = $_SESSION['username'];
    $level      = $_SESSION['level'];
    $id_user    = $_SESSION['id_user'];

    if($id_user == null) {
        header("location:index.php");
    }else {
        if($_SESSION['level'] == 1)
        {
            $query_admin = mysqli_query($connection, 'SELECT * FROM siswa');
        }
        
        if($_SESSION['level'] == 2)
        {
            $query_user = mysqli_query($connection, 'SELECT * FROM siswa WHERE user_id ='.$_SESSION['id_user']);
        }
    }

    if(isset($_GET['logout']))
    {
        session_start();
        session_destroy();
        header("location:index.php");
    }

    if(isset($_GET['delete']))
    {
        $result = mysqli_query($connection, "DELETE FROM siswa WHERE user_id = ".$_GET['delete']);
        $result = mysqli_query($connection, "DELETE FROM users WHERE id_user = ".$_GET['delete']);

        $msg = "<script type='text/javascript'>alert('Data telah terhapus !')</script>";
        header("location:home.php?message=".$msg);
    }
    if (isset($_GET['message'])){
        echo $_GET['message'];
    }
?>

<body>
<center>
    <h2>Data User</h2>
    <p>Hello Welcome Home <?php echo $username; ?></p>
</center><br>

<?php if($_SESSION['level'] == 1) { ?>
    <button type="button" id="btn-tambah"><a href="tambah.php">Tambah</a></button><br><br>

    <table id="data" align="center">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php while($data = mysqli_fetch_array($query_admin)) { ?>
            <tbody>
                <td><?php echo $data['NIS'] ?></td>
                <td><?php echo $data['Nama'] ?></td>
                <td>
                    <button><a href="edit.php?edit=<?php echo $data['user_id']; ?>">Edit</a></button>
                    <button><a href="home.php?delete=<?php echo $data['user_id']; ?>">Hapus</a></button>
                </td>
            </tbody>
        <?php } ?>
    </table> <br>
<?php } else {?>
    <table id="data" align="center">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <?php while($rows = mysqli_fetch_array($query_user)) { ?>
            <tbody>
                <td><?php echo $rows['NIS'] ?></td>
                <td><?php echo $rows['Nama'] ?></td>
                <td>
                    <button><a href="edit.php?edit=<?php echo $rows['user_id']; ?>">Edit</a></button>
                </td>
            </tbody>
        <?php }?>
    </table> <br>
<?php } ?>

<center>
    <button type="button"><a href="home.php?logout">Logout</a></button><br><br>
</center>
</body>
</html>