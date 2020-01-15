<?php
include 'database.php';
$biodata = new Biodata();

$aksi = $_GET['aksi'];

if (isset($_POST['simpan'])) {
    $id2 = $_POST['id'];
    $nama2 = $_POST['nama'];
    $tanggal_lahir2 = $_POST['tanggal_lahir'];
}
if ($aksi == "tambah") {
    $biodata->create($nama2, $tanggal_lahir2);
    header("location:index.php");
} elseif ($aksi == "update") {
    $biodata->update($id2, $nama2, $tanggal_lahir2);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $biodata->delete($_GET['id']);
    header("location:index.php");
}
?>