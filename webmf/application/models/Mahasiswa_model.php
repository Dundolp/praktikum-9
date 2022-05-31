<?php
//class
class Mahasiswa_model extends CI_Model{
    //struktur data
    public $id, $nama, $nim, $gender, $tmp_lahir, $tgl_lahir, $ipk;

    //properti predikat
    public function predikat(){
        $predikat = ($this->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}

?>