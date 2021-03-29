<!DOCTYPE html>
<html>
<head>
	<title>input</title>
</head>
<body>
	<form method="POST" action="hasilkirim.php" > <!--DIgunakan untuk memanggil method post yang ada dalam file hasilkirim.php-->
		<table width="400" align="center" cellpadding="2" cellspacing="2"> <!--Membuat table memiliki lebar 400 dan berada di posisi tengah-->
			<tr>  <!-- pembuatan table row-->
				<td width="130">Nama</td>  <!-- table data yang memiliki lebar 130 dan memiliki variabel nama-->
				<td><input type="text" name="nama"></td> <!-- table data memiliki type input text-->
			</tr>
			<tr> <!-- pembuatan table row-->
				<td colspan="2" align="center"></td> <!-- table data yang berposisi di tenggah-->
				<input type="submit" name="btnlogin" value="kirim"> <!-- input table data bertipe submit serta memiliki value login-->
				<input type="reset" name="reset" value="reset"> <!-- input table data bertipe reset serta memiliki value reset-->
			</tr>
		</table>
	</form>
</body>
</html>