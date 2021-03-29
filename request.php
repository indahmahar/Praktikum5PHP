<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="request" action="requestAct.php">
		<a href="http://localhost:8090/Praktikum5PHP/requestAct.php?nama=&email=&btnLogin=Login">Link ke Cek</a> <!--DIgunakan untuk memanggil method request yang ada dalam file requestAct.php-->
		<table width="400" align="center" cellpadding="2" cellspacing="2"><!--Membuat table memiliki lebar 400 dan berada di posisi tengah-->
			<tr>
				<td width="130">Nama</td> <!-- table data yang memiliki lebar 130 dan memiliki variabel nama-->
				<td><input type="text" name="nama"></td><!-- table data memiliki type input t-->
			</tr>
			<tr>
				<td width="130">Email</td> <!-- table data yang memiliki lebar 130 dan memiliki variabel email-->
				<td><input type="text" name="email"></td> <!-- table data memiliki type input t-->
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login"><!-- input table data bertipe submit serta memiliki value login-->
					<input type="reset" name="reset"> <!-- input table data bertipe reset serta memiliki value reset-->
				</td>
			</tr>
		</table> 
	</form>
</body>
</html>