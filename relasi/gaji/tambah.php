<html>
<head>
	<title>CRUD</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css" > -->
</head>
<body>
    <center><br><h1>SILAHKAN ISI</h1>
                <form action="proses.php?aksi=tambah" method="post">
		            <label><h3><center>Nama Karyawan</center></h3></label>
		            <center><select name="karyawan_id">
                        <?php
                        include '../database.php';
                        $karyawan = new Karyawan();
                        foreach ($karyawan->index() as $data) {
                        ?>
                        <option value="<?php echo $data['karyawan_id']; ?>"><?php echo $data['karyawan_nama']; ?></option>
                        <?php } ?>
                    </select></center>
                    <label><h3><center>Gaji Pokok</center></h3></label>
		            <center><input type="text" name="gaji_pokok"></center><br>
					<center><input type="Submit" name="simpan" value="Simpan"></center>
                    <footer>
				        <center><h4>&copy; Copyright Rofi Fadilah</h4></center>
					</footer>
				</form>
</body>
</html>