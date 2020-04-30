<!DOCTYPE html>
<input type="button" value="Kembali Menu Utama" onClick="location.href='../index.php'" >


<html>
<head>
  <title>Modul 4 </title>
  <!-- menghubungkan dengan file css -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- menghubungkan dengan file jquery -->
  <script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
  <header>
  
    <h3 class="deskripsi">Implementasi Operasi Logika Pada PHP</h3>
  </header>
 
  <div class="menu">
    <ul>
      <li><a href="index.php?page=home">Logika AND</a></li>
      <li><a href="index.php?page=tentang"> Logika OR</a></li>
      <li><a href="index.php?page=tutorial"> Logika XOR</a></li>
      <li><a href="index.php?page=contact"> Logika NOT</a></li>
    </ul>
  </div>
 
  <div class="badan">
 
 
  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
 
    switch ($page) {
      case 'home':
        include "and.php";
        break;
      case 'tentang':
        include "or.php";
        break;
      case 'tutorial':
        include "xor.php";
        break;  
      case 'contact':
        include "not.php";
        break;        
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  }else{
    include "home.php";
  }
 
   ?>
 
  </div>
</div>
</body>
</html>

