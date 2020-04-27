<!DOCTYPE html>
<html>
<head>
	<title>Modul 3 </title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
	
		<h3 class="deskripsi">Implementasi Operator Aritmatika Pada PHP</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">Pangkat Bilangan</a></li>
			<li><a href="index.php?page=tentang"> Faktorial Suatu Bilangan</a></li>
			<li><a href="index.php?page=tutorial"> Perkalian Suatu Bilangan</a></li>
			<li><a href="index.php?page=contact"> FPB Suatu Bilangan</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "Pangkat.php";
				break;
			case 'tentang':
				include "Faktorial.php";
				break;
			case 'tutorial':
				include "Perkalian.php";
				break;	
			case 'contact':
				include "fpb.php";
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