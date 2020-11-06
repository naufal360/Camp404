<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewexport" content="width=device-width, initial-scale=1.0">
        <title>Camp 404 | Program Input/Output</title>
    </head>

    <body>
        <form method="POST">
            <table>
                <tr>
                    <td>Input 1:</td>
                    <td><input type="number" namespace="angka 1" name="angka_1"></td>
                </tr>
                <tr>
                    <td>Input 2:</td>
                    <td><input type="number" namespace="angka 2" name="angka_2"></td>
                </tr>
                <tr>
                    <td>Input 3:</td>
                    <td><input type="number" namespace="angka 3" name="angka_3"></td>
                </tr>
            </table>
            <button type="submit" name="hasil">Submit</button>
        </form><br>
        <?php
            $result = 0;
            if(isset($_POST['hasil']))
            {
                $a1 = $_POST['angka_1'];
                $a2 = $_POST['angka_2'];
                $a3 = $_POST['angka_3'];
                $result = $a1 + $a2 + $a3;
            }
        ?>
        <table>
            <tr>
                <td>Hasil :</td>
                <td><?php echo $result?></td>
            </tr>
        </table>
    </body>

</html>