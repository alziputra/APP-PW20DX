<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mmahasiswa extends CI_Model
{
    public function getData()
    {
        //Tampilkan data dari "tb_mahasiswa"
        $this->db->from("tb_mahasiswa");
        //Urutkan berdasarkan ASC
        $this->db->order_by("npm", "ASC");
        //Eksekusi query
        $query = $this->db->get()->result();
        //Kirim hasil query ke controller "Mahasiswa"
        return $query;
    }
}
