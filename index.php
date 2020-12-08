<html>
<head>
	<title>Issoku Macrame</title>
	<!-- menghubungkan dengan file css type="text/css" -->
	<link rel="stylesheet"  href="css/thes.css">
	<!-- menghubungkan dengan file jquery -->
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<!-- <script type="text/javascript" src="jquery.js"></script> -->
</head>
<body class="body">
	<header class="header" >
    <img src="img/header.png" width="100%" height="auto" style="display: block; margin: auto;">
	
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=history">PROFIL</a></li>
			<li><a href="index.php?page=tradis">KATALOG</a></li>
			<li><a href="index.php?page=modern">KONTAK</a></li>
		</ul>
	</div>
	
	<div class="badan">
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'history':
				include "halaman/profil.php";
				break;
			case 'tradis':
				include "halaman/katalog.php";
				break;			
			case 'modern':
				include "halaman/kontak.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
	 ?>
	</div>
 		<div class="footer">
		Created By Issoku Macrame | T A T A   S U R Y A N I
		</div>
	</div>
	</header>
</div>

</body>
</html>