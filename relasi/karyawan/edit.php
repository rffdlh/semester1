<html>
<head>
	<title>CRUD</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css" > -->
</head>
<body>
	<?php
	include '../database.php';
	$karyawan = new Karyawan();
	foreach ($karyawan->edit($_GET['karyawan_id']) as $data) {
		$karyawan_id2 = $_POST['karyawan_id'];
        $karyawan_nama2 = $_POST['karyawan_nama'];
	}
	?>
<center><br><h1 class="tombol_login">SILAHKAN UBAH</h1>
    <form action="proses.php?aksi=update" method="post">
		            <input type="hidden" name="karyawan_id" value="<?php echo $karyawan_id2 ?>">
					<label><h3><center>Nama Karyawan</center></h3></label>
					<center><input type="text" name="karyawan_nama" value="<?php echo $karyawan_nama2 ?>"><br><br>
					<center><input type="Submit" name="simpan" value="Simpan"></center>
					</form>
                    </body>
</html>