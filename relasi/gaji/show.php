<html>
<head>
	<title>CRUD</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css" > -->
</head>
<body>
<?php
include '../database.php';
$gaji = new Gaji;
$karyawan = new Karyawan;
foreach ($gaji->edit($_GET['gaji_id']) as $data) {
    $gaji_id2 = $data['gaji_id'];
    $karyawan_id2 = $data['karyawan_id'];
    $gaji_pokok2 = $data['gaji_pokok'];
    $karyawan_nama2 = $data['karyawan_nama'];
}
?>
<br><center><h1>KARYAWAN SAYA</h1></center>
                    <form action="index.php" method="post">
						<!-- <div class="form-group"> -->
							<label><h3><center>Nama Karyawan</center></h3></label>
							<center><input type="text" name="karyawan_nama" class="form-control" value="<?php echo $karyawan_nama2?>"></center>
						<!-- </div> -->
                        <!-- <div class="form-group"> -->
							<label><h3><center>Gaji Pokok</center></h3></label>
							<center><input type="text" name="gaji_pokok" class="form-control" value="<?php echo $gaji_pokok2?>"></center><br>
						<!-- </div> -->
					    <center><input type="Submit" name="kembali" value="Kembali" class="tombol_login"></center>
						<footer>
				            <center><h4>&copy; Copyright Rofi Fadilah</h4></center>
						</footer>
                    </form>
</body>
</html>