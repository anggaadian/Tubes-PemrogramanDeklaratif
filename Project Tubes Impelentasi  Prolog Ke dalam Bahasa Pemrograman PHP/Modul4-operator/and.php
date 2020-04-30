<?php
@$a = $_POST['a'];
@$c = $_POST['c'];
@$hasil = pow($a, $c);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>AND</title>
    </head>
    <body>
        <form method="POST">
            <table>
                <tr>
                    
                    <td><input name="a" type="number" min="0" max="1" value="<?php echo $a; ?>"/></td>
                    <td>AND</td>
                    <td><input name="c" type="number" min="0" max="1" value="<?php echo $c; ?>"/></td>
                
                </tr>
                <tr>
                    <td><input name="hitung" type="submit" value="Hasil"/></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        if($a == "" && $c == ""){
                    echo "";
                    }
                    elseif ($a == 0 && $c==1)
                    {
                      echo "0 (FALSE)";
                    } elseif($a == 1 && $c == 0)
                    {
                        echo "0 (FALSE)";
                    } elseif($a == 0 && $c == 0)
                    {
                        echo "0 (FALSE)";
                    }else{
                        echo "1 (TRUE)";
                    }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>