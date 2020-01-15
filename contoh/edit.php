<html>
<head>
	<title>CRUD</title>
    <link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
	<?php
	include 'database.php';
	$biodata = new Biodata();
	foreach ($biodata->edit($_GET['id']) as $data) {
		$id2 = $data['id'];
		$nama2 = $data['nama'];
		$tanggal_lahir2 = $data['tanggal_lahir'];
		$tempat_lahir2 = $data['tempat_lahir'];
        $jenis_kelamin2 = $data['jenis_kelamin'];
        $agama2 = $data['agama'];
        $alamat2 = $data['alamat'];
        $motivasi_hidup2 = $data['motivasi_hidup'];
	}
	?>
	<div id="utama"> 
        <div class="header"> 
            <div class="wadah2"> 
                <div class="gambar2"> 
	            <br><center><h2>SILAHKAN UBAH BIODATA</h2></center><br>
	            <form action="proses.php?aksi=update" method="post">
		            <input type="hidden" name="id" value="<?php echo $id2 ?>">
					<label><h3><center>Nama</center></h3></label>
					<center><input type="text" name="nama" value="<?php echo $nama2 ?>">
					<label><h3><center>Tanggal Lahir</center></h3></label>
					<center><input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir2 ?>"></center>
					<label><h3><center>Tempat Lahir</center></h3></label>
					<center><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir2 ?>"></center>
					<label><h3><center>Jenis Kelamin</center></h3></label>
					<center><input type="radio" name="jenis_kelamin" value="Laki-Laki" value="<?php echo $jenis_kelamin2 ?>" checked>Laki-Laki &nbsp
					<input type="radio" name="jenis_kelamin" value="Perempuan" value="<?php echo $jenis_kelamin2 ?>" checked>Perempuan</center>
					<label><h3><center>Agama</center></h3></label>
					<center><select name="agama" value="<?php echo $agama2 ?>">
					    <option value="Islam">Islam</option>
						<option value="Budha">Budha</option>
						<option value="Hindu">Hindu</option>
						<option value="Katolik">Katolik</option>
					</select></center>
					<label><h3><center>Alamat</center></h3></label>
					<center><textarea name="alamat" cols="20" rows="5" value="<?php echo $alamat2 ?>"></textarea></center>
					<label><h3><center>Motivasi Hidup</center></h3></label>
					<center><textarea name="motivasi_hidup" cols="20" rows="5" value="<?php echo $motivasi_hidup2 ?>"></textarea></center>
					<input type="Submit" name="simpan" value="Simpan" class="tombol_login">
					</form>
				</div>
            </div>
        </div>
    </div>
</body>
</html>