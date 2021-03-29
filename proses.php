<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 	
	include "inc.php";//mendeklarasikan data file 
	echo $angka; //menampilkan apa yang ada dalam variabel tersebut
	echo "<br>"; //mendeklarasikan tag br
	if ($angka==100) { //jika kondisi angka bernilai 100 maka akan tercetak memuaskan
	echo "memuaskan";
	}elseif ($angka<100&&$angka>=85) { //jika nilai angka dibawah 100 sampai dengan angka 85 maka akan tercetak sangat baik
	echo "sangat baik";
	}elseif ($angka<85&&$angka>=70) {  //jika nilai angka dibawah 85 sampai dengan angka 70 maka akan tercetak baik
	echo "baik";
	}elseif ($angka<70&&$angka>=55) { //jika nilai angka dibawah 70 sampai dengan angka 55 maka akan tercetak cukup
	echo "cukup";
	}elseif ($angka<55&&$angka>=0) { //jika nilai angka dibawah 55 sampai dengan angka 0 maka akan tercetak kurang
	echo "kurang";
}
?>
</body>
</html>