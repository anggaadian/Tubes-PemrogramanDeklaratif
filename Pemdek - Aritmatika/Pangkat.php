<?php
@$bilangan = $_POST['bilangan'];
@$pangkat = $_POST['pangkat'];
@$hasil = pow($bilangan, $pangkat);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PANGKAT</title>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    <td>Input Bilangan</td>
                    <td>=</td>
                    <td><input name="bilangan" type="text" value="<?php echo $bilangan; ?>"/></td>
                </tr>
                <tr>
                    <td>Pangkat</td>
                    <td>=</td>
                    <td><input name="pangkat" type="text" value="<?php echo $pangkat; ?>"/></td>
                </tr>
                <tr>
                    <td><input name="hitung" type="submit" value="Hitung"/></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if(isset ($bilangan))
                            echo $hasil;
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>