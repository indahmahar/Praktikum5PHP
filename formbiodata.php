<!DOCTYPE html>
<html>
<head>
    <title>tugas no 3</title>
    <style type="text/css">
        body {
            background-color: white;
        }
        form {
            font-weight: bold;
        }
    </style><!-- bacground body akan berwana putih dab font pada form akan tebal-->
</head>
<body>
<center><h1>Formulir Sederhana</h1></center>  <!--membuat tulisan header-->
<center>
    <form method="POST" action="getAct.php">  <!--digunakan untuk memanggil method post yang ada didalam getAct.php-->
        <table border="0" width="400"> <!--membuat table border dan lebar 400-->
        <tr><td>Nama</td> <!--membuat table data nama-->
               <td>:</td>
               <td><input type="text" size="25" name="Nama"></td><!--table data memiliki type input text dan size 25-->
        </tr>
        <tr><td>Email</td> <!--membuat table data email-->
               <td>:</td>
               <td><input type="text" size="25" name="Email"></td> <!--table data memiliki type input text dan size 25-->
        </tr>
        <tr><td>Tanggal Lahir</td> <!--membuat table data status--> 
               <td>:</td>
               <td><input type="date" name="tanggal"> <!--table data memiliki type input date -->
        </td>
        </tr>
        <tr><td>Jenis Kelamin</td> <!--membuat table data jenis kelamin--> 
               <td>:</td>
               <td><input type="radio" value="Laki-laki" name="jenisk">Laki-Laki <!--membuat input data bertipe radio button--> 
                      <input type="radio" value="Perempuan" name="jenisk">Perempuan</td> <!--membuat input data bertipe radio button-->
        </tr>
        <tr><td>Fakultas</td> <td>:</td> 
          <td><select name="fakultas_mahasiswa" id="" style="width: 95%;"><!--membuat table data fakultas-->
            <option value="">--Pilih--</option>
            <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
            <option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
            <option value="Fakultas Hukum">Fakultas Hukum</option>
            <option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
            <option value="Fakultas Tektik">Fakultas Tektik</option>
            <option value="Fakultas Pertanian">Fakultas Pertanian</option>
          </select></td>
        </tr>
        <tr><td>Jurusan</td><td>:</td> <!--Membuat table jurusan-->
          <td><select name="jurusan_mahasiswa" id="" style="width: 95%;">
            <option value="">--Pilih--</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Akutansi">Akutansi</option>
            <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Informatika">Informatika</option>
            <option value="Sains Data">Sains Data</option>
            <option value="Hukum">Hukum</option>
            <option value="Administrasi Negara">Administrasi Negara</option>
            <option value="Administrasi Bisnis">Administrasi Bisnis</option>
            <option value="Hubungan Internasional">Hubungan Internasional</option>
            <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
            <option value="Pariwisata">Pariwisata</option>
            <option value="Teknik Industri">Teknik Industri</option>
            <option value="Teknik Kimia">Teknik Kimia</option>
            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
            <option value="Teknik Sipil">Teknik Sipil</option>
            <option value="Teknologi Pangan">Teknologi Pangan</option>
            <option value="Teknik Mesin">Teknik Mesin</option>
            <option value="Agribisnis">Agribisnis</option>
            <option value="Agroteknologi">Agroteknologi</option>
          </select></td></tr>
        <tr><td>Hobi</td> <!--membuat input data bertipe radio button-->
               <td>:</td>
                <td><select name="Hobi"> <!--membuat input data bertipe selection -->
                   <option value="membaca">membaca</option> <!--membuat sebuah option / pilihan-->
                   <option value="menulis">menulis</option> <!--membuat sebuah option / pilihan-->
                   <option value="menyanyi">menyanyi</option> <!--membuat sebuah option / pilihan-->
                   <option value="belajar">Belajar</option> <!--membuat sebuah option / pilihan-->
                   <option value="Tenis">Tenis</option> <!--membuat sebuah option / pilihan-->
                   </select></td>
        </tr>
        <tr><td>Alamat</td> <!--membuat table data-->
               <td>:</td>
               <td><textarea rows="2" cols="35" name="Alamat"></textarea></td> <!--membuat sebuah text are yang bisa di inputkan text-->
        </tr>
        <tr><td><center><input type="reset" value="Hapus"> <!-- input table data bertipe reset serta memiliki value reset--> 
            <input type="submit" value="Kirim" ></center></td></tr> <!-- input table data bertipe submit serta memiliki value kirim-->
        </tr></td>
        </table>
    </form>
</center>
</body>
</html>