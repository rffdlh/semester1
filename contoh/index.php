<html>
<head>
	<title>CRUD</title>
    <link href="style.css" rel="stylesheet" type="text/css" > 
</head>
<body>
    <div id="utama"> 
        <div class="header"> 
                <center><br><h1 class="tombol_login">Data Biodata</h1><br>
                <center><a href="tambah.php" class="tombol_login">Tambah</a><br><br>
                <table border="1">
                    <tr bgcolor="white">
                        <th>&nbsp No &nbsp</th>
                        <th>Nama &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                        <th>Tanggal Lahir &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                        <th>Tempat Lahir &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                        <th>Jenis Kelamin &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                        <th>Agama &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                        <th>Alamat &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                        <th>Motivasi Hidup &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                        <th>Aksi &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                    </tr>
                    <?php
                    include 'database.php';
                    $biodata = new Biodata();
                    $no = 1;
                    foreach ($biodata->index() as $data) {
                    ?>
                    <tr bgcolor="white">
                        <td><center><?php echo $no++; ?></center></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['tanggal_lahir']; ?></td>
                        <td><?php echo $data['tempat_lahir']; ?></td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                        <td><?php echo $data['agama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['motivasi_hidup']; ?></td>
                        <td><a href="show.php?id=<?php echo $data['id']; ?>" class="tombol">Tampil</a>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="tombol">Ubah</a>
                            <a href="proses.php?id=<?php echo $data['id']; ?>
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')" class="tombol">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
        </div>
    </div>
</body>
</html>