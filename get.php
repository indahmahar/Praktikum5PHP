<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="GET" action="getAct1.php"> <!--Digunakan untuk memanggil method get yang ada dalam file getAtc1.php-->
		<table width="400" align="center" cellpadding="2" cellspacing="2"> <!--Membuat table memiliki lebar 400 dan berada di posisi tengah-->
			<tr> <!-- pembuatan table row-->
				<td width="130">Nama</td> <!-- table data yang memiliki lebar 130 dan memiliki variabel nama-->
				<td><input type="text" name="nama"></td> <!-- table data memiliki type input text-->
			</tr>
			<tr>
				<td width="130">Email</td> <!-- table data yang memiliki lebar 130 dan memiliki variabel email-->
				<td><input type="text" name="email"></td> <!-- table data memiliki type input text-->
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login"> <!-- input table data bertipe submit serta memiliki value login-->
					<input type="reset" name="reset"> <!-- input table data bertipe reset serta memiliki value reset-->
				</td>
			</tr>
		</table> 
	</form>
</body>
</html>