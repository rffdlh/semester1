<?php
class Biodata extends Database {
    
    //Menampilkan Semua Data
    public function index(){
        $data_biodata=mysqli_query($this->koneksi,"select * from biodata");
        return $data_biodata;
    }
    
    //Menambah Data
    public function create($nama1,$tanggal_lahir1){
        mysql_query($this->koneksi,"insert into biodata values(null,'$nama1','$tanggal_lahir1')");
    }
}
?>