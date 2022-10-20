<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function index()
	{
		//Panggil model "Mmahasiswa.php"
		$this->load->model("Mmahasiswa", "mhs", true);

		//Panggil fungsi "getData"
		// $hasil = $this->mhs->getData();

		//Tampilkan isi "$hasil"
		// foreach ($hasil as $data) {
		// 	//Tampilkan sesuai field
		// 	$id = $data->id;
		// 	$npm = $data->npm;
		// 	$nama = $data->nama;
		// 	$telepon = $data->telepon;
		// 	$jurusan = $data->jurusan;
		// 	$foto = $data->foto;
		// 	$status = $data->status;

		// 	echo $npm . ", " . $nama;
		// }
		//Panggil fungsi "getData" dari model
		$data = array(
			"hasil" => $this->mhs->getData()
		);
		$this->load->view("vw_mahasiswa", $data);
	}
}
