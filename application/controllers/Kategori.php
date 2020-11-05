<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = "Kategori";

        $data['kategori'] = $this->db->get_where('kategori')->result_array();
        $data['user'] = $this->User_model->cekData('username', $this->session->userdata('username'));

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('kategori/kategori');
        $this->load->view('templates/footer');
    }

    public function daftarCerita($id)
    {
        $data['judul'] = "Daftar Cerita";
        $data['user'] = $this->User_model->cekData('username', $this->session->userdata('username'));

        $data['cerita'] = $this->db->get_where('cerita', ['id_kategori' => $id])->result_array();

        $data['kategori'] = $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('kategori/daftarCerita', $data);
        $this->load->view('templates/footer');
    }

    public function bacaCerita($id)
    {
        $data['judul'] = "Cerita";
        $data['user'] = $this->User_model->cekData('username', $this->session->userdata('username'));

        $data['cerita'] = $this->db->get_where('cerita', ['id' => $id])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('kategori/bacaCerita', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Cerita";
        $data['user'] = $this->User_model->cekData('username', $this->session->userdata('username'));

        // $this->load->library('form_validation');
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required|trim', [
            'required' => 'Nama Kategori tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('kategori/tambah-kategori', $data);
            $this->load->view('templates/footer');
        } else {
            // ini nanti tinggal pake model yang kategori model trus ambi method yang tambahData
        }
    }
}
