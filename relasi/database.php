<?php
class Database {
    //property
    public $host = "localhost", $user = "root", $pass = "123", $db = "penggajihan";
    public $koneksi;

    //method
    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
    }
}
//Data table karyawan
include 'karyawan.php';
include 'gaji.php';
//konekssi DB
$db = new Database();
?>