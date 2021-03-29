<!DOCTYPE html>
<html>
<head>
	<title>Konversi Tipe</title>
</head>
<body>
	<?php
	$a = 300.4;// mendeklarasikan data varibel yang memiliki nilai
	echo "<br>";
	echo "Tipe Double : ", doubleval($a), "<br>"; //menampilkan data double dari varibel a
	echo "Tipe Integer : ", intval($a), "<br>"; //menampilkan data integer dari varibel a
	echo "Tipe String : ", strval($a); //menampilkan data string dari varibel a
	?>
</body>
</html>