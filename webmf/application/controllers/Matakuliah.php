<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends CI_Controller {

	//Fungsi menampilkan data
	public function index()
	{
		//load model + bikin objek
        $this->load->model('matakuliah_model', 'mtk1');

        //class model
        $this->mtk1->id = 1;
        $this->mtk1->kode = 'M009';
        $this->mtk1->nama = 'Geografi';
        $this->mtk1->sks = 3;

        //load model + bikin objek
        $this->load->model('matakuliah_model', 'mtk2');

        //class model
        $this->mtk2->id = 2;
        $this->mtk2->kode = 'M008';
        $this->mtk2->nama = 'Biologi Terapan';
        $this->mtk2->sks = 4;

        //load model + bikin objek
        $this->load->model('matakuliah_model', 'mtk3');

        //class model
        $this->mtk3->id = 3;
        $this->mtk3->kode = 'M007';
        $this->mtk3->nama = 'Fisika Terapan';
        $this->mtk3->sks = 3;

        //array objek
        $list_mtk = [$this->mtk1, $this->mtk2, $this->mtk3];

        // data untuk dikirim ke view
        $data['list_mtk'] = $list_mtk;

        $this->load->view('layout/header');
        // untuk ngirim data + nampilin ke view
        $this->load->view('layout/matakuliah', $data);
        $this->load->view('layout/footer');
	}
}