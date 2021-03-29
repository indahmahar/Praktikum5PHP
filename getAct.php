<!DOCTYPE html>
<html>
<head>
	<title>tugas 3</title>
	<style type="text/css">
        body {
            background-color: white;
        }

        .text{
        	font-weight: bold;
        }
    </style> <!-- bacground body akan berwana putih dab font pada form akan tebal-->
</head>
<body><center>
	<h2> Pendaftaran Berhasil </h2> <!--membuat tulisan header-->
	<br>
    <div class="text">
        <?php
        echo "<center>Nama : ".$_POST['Nama']. "</center><br>"; //menyimpan data dari varibel nama
        echo "<center>Email : ".$_POST['Email']. "</center><br>"; //menyimpan data dari varibel email
        echo "<center>Tanggal lahir : ".$_POST['tanggal']. "</center><br>"; //menyimpan data dari varibel tanggal
        echo "<center>Jenis Kelamin : ".$_POST['jenisk']. "</center><br>"; //menyimpan data dari varibel jenisk
        echo "<center>Fakultas : ".$_POST['fakultas_mahasiswa']. "</center><br>"; //menyimpan data dari varibel fakultas
        echo "<center>Jurusan : ".$_POST['jurusan_mahasiswa']. "</center><br>"; //menyimpan data dari varibel jurusan
        echo "<center>Hobi : ".$_POST['Hobi']. "</center><br>"; //menyimpan data dari varibel hobi
        echo "<center>Alamat : ".$_POST['Alamat']. "</center><br>"; //menyimpan data dari varibel alamat
?>
</div>
</center>
</body>
</html>