<?php
class Database{

    //property
    public $host="localhost",$user="root",$pass="123",$db="contoh";
    public $koneksi;

    //method
    public function __construct() {
        $this->koneksi = mysqli_connect($this->host,$this->user,$this->pass,$this->db);

        if ($this->koneksi) {
            //echo "berhasil";
        }else {
            echo "Koneksi Database Gagal";
        }
    }
}
//Data Table Siswa
include "biodata.php";
//koneksi DB
$db=new Database();
?>