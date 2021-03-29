<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	setcookie("variabel_cookies","ini adalah variabel cookies",time()+60); //membuat suatu variabel cookies yang memiliki waktu 1 detik
	echo "<a href=cekcookies.php>Cek cookies</a>"; //menampilkan suatu link file pengecekan suatu cookies di browser
 ?>
</body>
</html>