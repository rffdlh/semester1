<html>

<head>
	<title>CRUD</title>
</head>

<body>
	<center><b>SILAHKAN ISI BIODATA !!!</b></center>

	<form action="proses.php?aksi=tambah" method="post">

		<label><b>Nama </b></label>
		<input type="text" name="nama">
		<br><br>
		<label><b>Tanggal Lahir</b></label>
		<input type="date" name="tanggal_lahir">
		<br><br>
		<button type="submit" name="simpan">Simpan</button>

	</form>
</body>

</html>