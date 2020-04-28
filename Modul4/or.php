<?php
@$b = $_POST['b'];
@$d = $_POST['d'];
@$hasil = pow($b, $d);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>OR</title>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    
                    <td><input name="b" type="number" min="0" max="1" value="<?php echo $b; ?>"/></td>
                    <td>OR</td>
                    <td><input name="d" type="number" min="0" max="1" value="<?php echo $d; ?>"/></td>
                
                </tr>
                <tr>
                    <td><input name="hitung" type="submit" value="Hasil"/></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if($b == "" || $d == ""){
                            echo "";
                        }
                        elseif ($b == 0 || $d==1)
                        {
                          echo "1 (TRUE)";
                        } elseif($b == 1 || $d == 0)
                        {
                            echo "1 (TRUE)";
                        } elseif($b == 1 || $d == 1)
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