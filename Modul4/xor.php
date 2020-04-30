<?php
@$g = $_POST['g'];
@$h = $_POST['h'];
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
                        if($g == "" xor $h == ""){
                    echo "";
                    }
                    elseif($g == 0 xor $h == 1)
                    {
                      echo "1 (FALSE)";
                    } elseif($g == 1 xor $h == 0)
                    {
                        echo "1 (TRUE)";
                    } elseif($g == 1 xor $h == 1)
                    {
                        echo "0 (FALSE)";
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
