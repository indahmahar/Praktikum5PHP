<!DOCTYPE html>
<html>
<head>
	<title>Pemrograman PHP dengan Array</title>
</head>
<body>
	<?php
	//penulisan array dapat dibuat seperti berikut
	$nama[] = "Agung Teguh";//pedeklarasian array dan pengisian array tersebut
	$nama[] = "Wibowo "; //pedeklarasian array dan pengisian array tersebut
	$nama[] = "Almais "; //pedeklarasian array dan pengisian array tersebut
	echo $nama[1]. $nama[2]. $nama[0]; //menampilkan data array nama 0-2
	echo "<br>";
	$jum_array = count($nama); //penyimpanan jumlah data array nama
	echo "Jumlah elemen array = ".$jum_array; //menampilkan jumlah elemen array
	?>
</body>
</html>