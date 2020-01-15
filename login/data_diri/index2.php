<html>
<head>
<body>
    <center>
        <a href="#">Tambah</a>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harapan</th>
                <th colspan="4">Aksi<center></center></th>
            </tr>
            <?php
            include '../koneksi.php';
            $data_diri = new Data_diri();
            $no = 1;
            foreach ($data_diri->index() as $data) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['harapan']; ?></td>
                <td><a href="show.php?id=<?php echo $data['id']; ?>">Tampil</a>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">Ubah</a>
                    <a href="proses.php?id=<?php echo $data['id']; ?>
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>
</head>
</html>