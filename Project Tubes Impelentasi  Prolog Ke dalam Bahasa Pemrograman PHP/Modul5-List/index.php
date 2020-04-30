<input type="button" value="Kembali Menu Utama" onClick="location.href='../index.php'" >

<?php

//1. Mengubah List of List menjadi Linear List

//List of list (array multidimensi) yang akan diubah menjadi linear list (array 1 dimensi)
$array = array(1,[2,3,4,5],6,[7,8]);

//Fungsi untuk mengubah List of list (array multidimensi) menjadi linear list (array 1 dimensi)
function gethingTogether(Array $array)
{
    $result = [];
    if (!is_array($array)) {
        return false;
    }

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, gethingTogether($value));
        } else {
            $result[] = $value;
        }
    }
    return $result;
}

echo"<h3>Hasil No. 1 : </h3>";
print_r(gethingTogether($array));
echo"<br>";
echo"<br>";
echo"<br>";

//----------------------------------------------------------------------------------------

//2. Mengubah Linear List menjadi List of List

//Linear list (array 1 dimensi) yang akan diubah menjadi List of list (array multidimensi)
$array = array(
    1 => array(
        'kota' => 'Jakarta',
        'negara' => 'Indonesia',
        'benua' => 'Asia',
    ),
    2 => array(
        'kota' => 'London',
        'negara' => 'Inggris',
        'benua' => 'Eropa',
    ),
    3 => array(
        'kota' => 'Madrid',
        'negara' => 'Spanyol',
        'benua' => 'Eropa',
    ),
    4 => array(
        'kota' => 'Kairo',
        'negara' => 'Mesir',
        'benua' => 'Afrika',
    ),
);

//Fungsi untuk mengubah Linear list (array 1 dimensi) yang akan diubah menjadi List of list (array multidimensi)
$newArray = array();
foreach ($array as $row)
{
   $newArray[$row['benua']][$row['negara']][] = $row['kota'];
}

echo"<h3>Hasil No. 2 : </h3>";
print_r($newArray);

?>