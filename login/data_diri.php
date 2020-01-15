<?php
class Data_diri extends Login
{
    //Menampilkan Semua Data
    public function index() {
        $data_diri = mysqli_query($this->koneksi,
        "select * from data_diri");
        return $data_diri;
    }
}
?>