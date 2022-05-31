<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

	

	public function index(){
		//load model + bikin objek
	$this->load->model('dosen_model', 'dsn1');

	//class model
	$this->dsn1->id = '1';
	$this->dsn1->nidn = '0110121197';
	$this->dsn1->nama = 'Mulyadi';
	$this->dsn1->gender = 'Laki-laki';
	$this->dsn1->tmp_lahir = 'Bogor';
	$this->dsn1->tgl_lahir = '1995-02-11';
	$this->dsn1->pendidikan = 'Geografi';
	//load model + bikin objek
	$this->load->model('dosen_model', 'dsn2');

	//class model
	$this->dsn2->id = '2';
	$this->dsn2->nidn = '0110121198';
	$this->dsn2->nama = 'Mulyono';
	$this->dsn2->gender = 'Laki-laki';
	$this->dsn2->tmp_lahir = 'Depok';
	$this->dsn2->tgl_lahir = '1996-02-11';
	$this->dsn2->pendidikan = 'Biologi Terapan';
	//load model + bikin objek
	$this->load->model('dosen_model', 'dsn3');

	//class model
	$this->dsn3->id = '3';
	$this->dsn3->nidn = '0110121199';
	$this->dsn3->nama = 'Moeldoko';
	$this->dsn3->gender = 'Laki-laki';
	$this->dsn3->tmp_lahir = 'Jakarta';
	$this->dsn3->tgl_lahir = '1994-02-11';
	$this->dsn3->pendidikan = 'Fisika Terapan';

	//array objek
	$list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

	// data untuk dikirim ke view
	$data['list_dsn'] = $list_dsn;
	
	$this->load->view('layout/header');
	// untuk ngirim data + nampilin ke view
		$this->load->view('layout/dosen', $data);
		$this->load->view('layout/footer');
	}
}
?>