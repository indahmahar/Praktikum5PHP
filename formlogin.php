<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		body {
			background-color: white;
		}
	</style> <!-- membuat tampilan jadi warna putih-->
</head>
<body>
	<h1><center> FORM LOGIN</center></h1> <!--membuat tulisan header-->
	<form method="POST" action="Tugas1_act.php"> <!--digunakan untuk memanggil method post yang ada didalam tugas_1act.php-->
		<center><table border="0" width="400" align="center" cellpadding="2" cellspacing="2"> <!---->
			<tr> <!--pembuatan table row-->
				<td width="130">Nama</td> <!-- table data yang memiliki lebar 130 dan memiliki variabel nama-->
				<td><input type="text" name="Nama"></td> <!--table data memiliki type input text-->
			</tr>
			<tr> <!--pembuatan table row-->
				<td width="130">Email</td> <!-- table data yang memiliki lebar 130 dan memiliki variabel email-->
				<td><input type="text" name="Email"></td> <!--table data memiliki type input text-->
			</tr>
			<tr> <!--pembuatan table row-->
				<td>
					<input width="10" type="submit" name="btnLogin" value="Login"> <!-- input table data bertipe submit serta memiliki value login-->
					<input width="10" type="reset" name="reset" value="Reset"> <!-- input table data bertipe reset serta memiliki value reset-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>