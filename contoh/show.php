<html>
<head>
	<title>CRUD</title>
    <link href="style.css" rel="stylesheet" type="text/css" >
</head>
<body>
<?php
    include 'database.php';
    $biodata= new Biodata();
    foreach ($biodata->edit($_GET['id']) as $data){
        $id2=$data['id'];
        $nama2=$data['nama'];
		$tanggal_lahir2=$data['tanggal_lahir'];
		$tempat_lahir2=$data['tempat_lahir'];
        $jenis_kelamin2=$data['jenis_kelamin'];
        $agama2=$data['agama'];
        $alamat2=$data['alamat'];
        $motivasi_hidup2=$data['motivasi_hidup'];
  	}
?>
<div id="utama"> 
    <div class="header"> 
        <div class="wadah2"> 
            <div class="gambar2"> 
				<br><center><h1>BIODATA SAYA</h1></center><br>
                    <form action="index.php" method="post">
						<!-- <div class="form-group"> -->
							<label><h3><center>Nama</center></h3></label>
							<center><input type="text" name="nama" class="form-control" value="<?php echo $nama2?>"></center><br>
						<!-- </div> -->
						<!-- <div class="form-group"> -->
							<label><h3><center>Tanggal Lahir</center></h3></label>
							<center><input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $tanggal_lahir2?>"></center><br>
						<!-- </div> -->
						<!-- <div class="form-group"> -->
							<label><h3><center>Tempat Lahir</center></h3></label>
		                    <center><input type="text" name="tempat_lahir" class="form-control" value="<?php echo $tempat_lahir2?>"></center><br>
						<!-- </div> -->
						<!-- <div class="form-group"> -->
							<label><h3><center>Jenis Kelamin</center></h3></label>
		                    <center><input type="text" name="jenis_kelamin" class="form-control" value="<?php echo $jenis_kelamin2?>"></center><br>
						<!-- </div> -->
						<!-- <div class="form-group"> -->
							<label><h3><center>Agama</center></h3></label>
							<center><input type="text" name="agama" class="form-control" value="<?php echo $agama2 ?>"></center><br>
						<!-- </div> -->
						<!-- <div class="form-group"> -->
							<label><h3><center>Alamat</center></h3></label>
		                    <center><input type="text" name="alamat" class="form-control" value="<?php echo $alamat2 ?>"></center><br>
						<!-- </div> -->
						<!-- <div class="form-group"> -->
							<label><h3><center>Motivasi Hidup</center></h3></label>
		                    <center><input type="text" name="motivasi_hidup" class="form-control" value="<?php echo $motivasi_hidup2 ?>"></center>
                        <!-- </div> -->
					    <input type="Submit" name="kembali" value="Kembali" class="tombol_login"><br><br>
						<footer>
				            <center><h4>&copy; Copyright Rofi Fadilah</h4></center>
						</footer>
                    </form>
                </div>
			</div>
		</div>
    </div>
</body>
</html>