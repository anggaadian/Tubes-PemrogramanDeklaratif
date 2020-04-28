<?php
@$x = $_POST['x'];
@$y = $_POST['y'];
@$hasil = pow($x, $y);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>NOT</title>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    
                    <td><input name="x" type="number" min="0" max="1" value="<?php echo $x; ?>"/></td>
                    <td>NOT</td>
                    <td><input name="y" type="number" min="0" max="1" value="<?php echo $y; ?>"/></td>
                
                </tr>
                <tr>
                    <td><input name="hitung" type="submit" value="Hasil"/></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if($x == "" && $y == ""){
                            echo "";
                        }
                        elseif (!$x == !$y)
                        {
                          echo "(TRUE)";
                        }else{
                            echo "(FALSE)";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>