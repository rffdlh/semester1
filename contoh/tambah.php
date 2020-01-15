<html>
<head>
	<title>CRUD</title>
    <link href="style.css" rel="stylesheet" type="text/css" > 
</head>
<body>
    <div id="utama"> 
        <div class="header"> 
            <div class="wadah2"> 
                <div class="gambar2"> 
	            <br><center><h2>SILAHKAN ISI BIODATA</h2></center><br>
	            <form action="proses.php?aksi=tambah" method="post">
		            <label><h3><center>Nama</center></h3></label>
		            <center><input type="text" name="nama"></center>
		            <label><h3><center>Tanggal Lahir</center></h3></label>
		            <center><input type="date" name="tanggal_lahir"></center>
					<label><h3><center>Tempat Lahir</center></h3></label>
					<center><input type="text" name="tempat_lahir"></center>
					<label><h3><center>Jenis Kelamin</center></h3></label>
					<center><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki &nbsp
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</center>
					<label><h3><center>Agama</center></h3></label>
					<center><select name="agama">
					<option value="Islam">Islam</option>
						<option value="Budha">Budha</option>
						<option value="Hindu">Hindu</option>
						<option value="Katolik">Katolik</option>
					</select></center>
					<label><h3><center>Alamat</center></h3></label>
					<center><textarea name="alamat" cols="20" rows="5"></textarea></center>
					<label><h3><center>Motivasi Hidup</center></h3></label>
					<center><textarea name="motivasi_hidup" cols="20" rows="5"></textarea></center><br>
					<input type="Submit" name="simpan" value="Simpan" class="tombol_login">
				</form>
	            </div>
            </div>
        </div>
    </div>
</body>
</html>