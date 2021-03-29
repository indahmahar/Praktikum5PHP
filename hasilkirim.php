<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	if (empty($_POST['nama'])) { //jika nama tersimpan maka header akan memanggil ke file kosong.php 
	header("Location:kosong.php");
	}else  { //apabila nama tidak tersimpan maka akan tampil nama tersebut
	echo "<center>Nama : ".$_POST['nama']."</center><br>";
}
 ?>
</body>
</html>