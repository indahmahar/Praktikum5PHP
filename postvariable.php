<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="POST" action="postAct.php"> <!--DIgunakan untuk memanggil method post yang ada dalam file postAtc.php-->
			<table width="400" align="center" cellpadding="2" cellspacing="2"> <!--Membuat table memiliki lebar 400 dan berada di posisi tengah-->
				<tr> <!-- pembuatan table row-->
					<td width="130" >nama</td> <!-- table data yang memiliki lebar 130 dan memiliki variabel nama-->
					<td> <input type="text" name="nama"></td> <!-- table data memiliki type input text-->
				</tr>
				<tr>
					<td width="130" >email</td> <!-- table data yang memiliki lebar 130 dan memiliki variabel email-->
					<td> <input type="text" name="email"></td> <!-- table data memiliki type input text-->
				</tr>
				<tr>
					<td>
						<input type="submit" name="btnlogin" value="Login"> <!-- input table data bertipe submit serta memiliki value login-->
						<input type="reset" name="reset" value="Reset"> <!-- input table data bertipe reset serta memiliki value reset-->
					</td>
				</tr>
			</table>
		</form>
	</body>
	</html>