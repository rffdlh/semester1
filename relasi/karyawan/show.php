<html>
<head>
	<title>CRUD</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css" > -->
</head>
<body>
<?php
    include 'database.php';
    $karyawan= new Karyawan();
    foreach ($karyawan->edit($_GET['karyawan_id']) as $data){
        $karyawan_id2 = $_POST['karyawan_id'];
        $karyawan_nama2 = $_POST['karyawan_nama'];
  	}
?>
<br><center><h1>KARYAWAN SAYA</h1></center>
<form action="index.php" method="post">
						<!-- <div class="form-group"> -->
							<label><h3><center>Nama Karyawan</center></h3></label>
							<center><input type="text" name="karyawan_nama" class="form-control" value="<?php echo $karyawan_nama2?>"></center><br>
						<!-- </div> -->
					    <center><input type="Submit" name="kembali" value="Kembali" class="tombol_login"></center>
						<footer>
				            <center><h4>&copy; Copyright Rofi Fadilah</h4></center>
						</footer>
                    </form>
                    </body>
</html>