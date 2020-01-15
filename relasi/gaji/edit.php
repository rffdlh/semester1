<?php
include '../database.php';
$gaji = new Gaji();
$karyawan = new Karyawan();
foreach ($gaji->edit($_GET['gaji_id']) as $data) {
    $gaji_id2 = $data['gaji_id'];
    $karyawan_id2 = $data['karyawan_id'];
    $gaji_pokok2 = $data['gaji_pokok'];
    $karyawan_nama2 = $data['karyawan_nama'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" type="text/css" href="main.css" /> -->
</head>
<body>
    <center><br><h1 class="tombol_login">SILAHKAN UBAH</h1>
                <form action="proses.php?aksi=update" method="post">
					<label><h3><center>Nama Karyawan</center></h3></label>
                    <input type="hidden" name="gaji_id" value="<?php echo $gaji_id2 ?>">
					<center><select type="text" name="karyawan_id" selected><br><br></center>
                        <?php foreach ($karyawan->index() as $xx) { ?>
                        <option value="<?php echo $xx['karyawan_id'] ?>" <?php if ($xx['karyawan_id'] == $karyawan_id2) echo "selected"; ?>><?php echo $xx['karyawan_nama'] ?></option>
                        <?php } ?>
                    </select>
                    <label><h3><center>Gaji Pokok</center></h3></label>
					<center><input type="text" name="gaji_pokok" value="<?php echo $gaji_pokok2 ?>"><br><br>
					<center><input type="Submit" name="simpan" value="Simpan"></center>
				</form>
</body>
</html>