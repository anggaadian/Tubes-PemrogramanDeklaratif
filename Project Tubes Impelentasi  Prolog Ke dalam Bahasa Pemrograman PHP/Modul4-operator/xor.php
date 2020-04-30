<?php
@$g = $_POST['g'];
@$h = $_POST['h'];
@$hasil = pow($g, $h);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>XOR</title>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    
                    <td><input name="g" type="number" min="0" max="1" value="<?php echo $g; ?>"/></td>
                    <td>XOR</td>
                    <td><input name="h" type="number" min="0" max="1" value="<?php echo $h; ?>"/></td>
                
                </tr>
                <tr>
                    <td><input name="hitung" type="submit" value="Hasil"/></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if($g == "" || $h == ""){
                            echo "";
                        }
                        elseif ($g == 0 || $h==1)
                        {
                          echo "1 (TRUE)";
                        } elseif($g == 1 || $h == 0)
                        {
                            echo "1 (TRUE)";
                        }else{
                            echo "0 (FALSE)";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>