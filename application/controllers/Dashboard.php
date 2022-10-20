<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->library(array('session'));
		$this->load->helper(array('captcha'));
		// tipe data prosedural
		// $data["nama"] = "Alzi";
		// $data["kelas"] = "IF 20 DX";

		// tipe data array
		$data = array(
			"nama" => "Alzi",
			"kelas" => "IF 20 DX",
			"jurusan" => "Informatika",
			"telepon" => "0821982568860",
			"kelamin" => "Laki-laki"
		);

		$this->load->view('dashboard_vw', $data);
	}
	public function kirim_konstan()
	{
		$data['meta'] = [
			'title' => 'Dashboard 2',
		];



		$this->load->view('dashboard2_vw', $data);
	}

	
}
