<?php
$array = array(5,6,70,10,36,2);
 
$array_values = array_values($array);

// get the first item in the array
echo"<h3>Nilai element pertama pada array adalah : ";
print array_shift($array_values); // prints 'one'

echo"</h3><br>";

// get the last item in the array
echo"<h3>Nilai element terakhir pada array adalah : ";
print array_pop($array_values); // prints 'three'

echo"</h3><br>";

echo"<h3>Nilai element kedua terakhir pada array adalah : ";
echo $array[count($array) -2]; 

echo"</h3><br>";

// count length
echo"<h3>Jumlah panjang array adalah : ";
echo count($array);

echo"</h3>";