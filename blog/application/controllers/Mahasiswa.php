<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    // Fungsi : manampilkan seluruh data
	public function index()
	{
		// Load model + bikin objek
        $this->load->model('mahasiswa_model', 'mhs1');

        // pake class model = isi data 
       
        $this->mhs1->nim = "0110221080";
        $this->mhs1->nama = "Seri ani";
        $this->mhs1->gender = "P";
        $this->mhs1->ipk = 4.0;

        // Buat objek 2
        // Load model + bikin objek
        $this->load->model('mahasiswa_model', 'mhs2');

        // pake class model + Isi data
       
        $this->mhs2->nim = "0110221075";
        $this->mhs2->nama = "yahya";
        $this->mhs2->gender = "L";
        $this->mhs2->ipk = 3.89;

        // Simpan ke dlm array
        $list_mhs = [$this->mhs1, $this->mhs2];

        // siapin data untuk dikirim ke view
        $data["list_mhs"] = $list_mhs;

        // Untuk ngirim data + nampilin ke view
        $this->load->view('header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('footer');
	}
}
