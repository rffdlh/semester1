<html>
<head>
	<title>CRUD</title>
    <!-- <link href="style.css" rel="stylesheet" type="text/css" > -->
</head>
<body>
    <center><br><h1 class="tombol_login">Data Gaji Karyawan</h1>
           <center><a href="tambah.php">Tambah</a><br><br>
                <table border="1">
                    <tr>
                        <th>&nbsp No &nbsp</th>
                        <th>&nbsp &nbsp &nbsp &nbsp &nbsp Nama Karyawan &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                        <th>&nbsp &nbsp &nbsp &nbsp &nbsp Gaji Pokok &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                        <th>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                        Aksi &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                    </tr>
                    <?php
                    include '../database.php';
                    $gaji = new Gaji();
                    $no = 1;
                    foreach ($gaji->index() as $data) {
                    ?>
                    <tr align="center">
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['karyawan_nama']; ?></td>
                        <td><?php echo $data['gaji_pokok']; ?></td>
                        <td><a href="show.php?gaji_id=<?php echo $data['gaji_id']; ?>">Tampil</a>
                            <a href="edit.php?gaji_id=<?php echo $data['gaji_id']; ?>">Ubah</a>
                            <a href="proses.php?gaji_id=<?php echo $data['gaji_id']; ?>
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
</body>
</html>