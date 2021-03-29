<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	if (isset($variabel_cookies)) {// jika varibel sudah di atur maka akan menampilkan kalimat yang di deklarasikan
	echo 'variable cookies "$variabel_cookies" nilainya adalah '.$variabel_cookies;
	}else {
	echo "varible cookies belum diterapkan"; //bila tidak memenuhi syarat maka akan ditampilkan kalimat 
}
 ?>
</body>
</html>