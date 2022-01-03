<?php

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['buku'] = $this->buku_model->getAllbuku();
        $this->load->view('buku/index', $data);
    }

    public function tambah()
    {

        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('buku/tambah');
        } else {
            $this->buku_model->tambahDatabuku();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('buku');
        }
    }

    public function hapus($id_buku)
    {
        $this->buku_model->hapusDatabuku($id_buku);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('buku');
    }


    public function ubah($id_buku)
    {
        $data['buku'] = $this->buku_model->getbukuById($id_buku);


        $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required');
        $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
        $this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('buku/ubah', $data);
        } else {
            $this->buku_model->ubahDatabuku();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('buku');
        }
    }

}
