<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	//Fungsi menampilkan data
	public function index()
	{
		//load model + bikin objek
        $this->load->model('mahasiswa_model', 'mhs1');

        //class model
        $this->mhs1->id = 1;
        $this->mhs1->nim = '0110121197';
        $this->mhs1->nama = 'Wildani Fadhillah';
        $this->mhs1->gender = 'Laki-laki';
        $this->mhs1->ipk = 3.9;

        //load model + bikin objek
        $this->load->model('mahasiswa_model', 'mhs2');

        //class model
        $this->mhs2->id = 1;
        $this->mhs2->nim = '0110121198';
        $this->mhs2->nama = 'Fadhillah Wildan';
        $this->mhs2->gender = 'Laki-laki';
        $this->mhs2->ipk = 3.7;

        //load model + bikin objek
        $this->load->model('mahasiswa_model', 'mhs3');

        //class model    
        $this->mhs3->id = $this->input->post('id');
        $this->mhs3->nim = $this->input->post('nim');
        $this->mhs3->nama = $this->input->post('nama');
        $this->mhs3->gender = $this->input->post('gender');
        $this->mhs3->tmp_lahir = $this->input->post('tmp_lahir');
        $this->mhs3->tgl_lahir = $this->input->post('tgl_lahir');
        $this->mhs3->prodi = $this->input->post('prodi');
        $this->mhs3->ipk = $this->input->post('ipk');
        
      

        

        //array objek
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];

        // data untuk dikirim ke view
        $data['list_mhs'] = $list_mhs;

        $this->load->view('layout/header');
        // untuk ngirim data + nampilin ke view
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');
	}
}