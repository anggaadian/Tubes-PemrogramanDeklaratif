<?php
   $bilangan=$_POST["bilangan"];
   if($bilangan>=1)
{
  echo "Faktorial secara ascending:<br>";
       
  for($i=1; $i <= $bilangan; $i++)
  {
     $faktorial = 1; //set nilai awal

     echo $i. "! = ";
       
     for($j=$i; $j > 0; $j--) //karena ascending, nilai awal dimulai dari $i dan tiap kali perulangan dikurang 1
     {
    if($j == 1)
    {
            echo " 1 = " .$faktorial;
        }
    else
        {            echo $j ." x ";       }
    ;        $faktorial*=$j; //menghitung hasil faktorial
     }echo "</br>";
  }
}
else if($bilangan == 0)
{

   echo "0! = 1";
}
else  //jika memasukkan nilai yang lebih kecil dari 0
{
   echo "Anda salah memasukkan bilangan.";
}



?>
<a href='index.php' target='blank'>Back to Menu</a>