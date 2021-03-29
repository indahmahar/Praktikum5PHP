<!DOCTYPE html>
<html>
<head>
	<title>Act</title>
	<style type="text/css">
		body{
			background-color: white;
		}
	</style> <!--membuat tampilan backgorund color warna putih-->
</head>
<body>
	<?php
	echo "<center>Nama : ".$_POST['Nama']. "</center><br>"; //menyimpan data dari varibel nama
	echo "<center>Email : ".$_POST['Email']. "</center><br>"; //menyimpan data dari varibel email
	echo "<center>Login Pada "; date_default_timezone_set('asia/jakarta'). "</center>"; //mengatur waktu set jakarta
	echo date("l-d-F-Y, h:i:s a"); // menampilkan login pada hari tanggal bulan  tahun dan waktu

	if (empty($_POST['Nama'])) { //jika nama di kosongkan maka akan redirect link ke file data kosong
		header("Location:datakosong.php");
	}
	if (empty($_POST['Email'])) { //jika email di kosongkan maka akan redirect link ke file data kosong
		header("Location:datakosong.php");
	}
	?>
	<br><br>
	<a href="formbiodata.php"> FORM BIODATA</a>
</body>
</html>