<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ceritaku extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'List Ceritaku';
        $data['user'] = $this->User_model->cekData('username', $this->session->userdata('username'));

        $data['cerita'] = $this->Cerita_model->ambilData('penulis', $data['user']['id_user']);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('cerita/listCeritaku', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tulis Cerita';
        $data['user'] = $this->User_model->cekData('username', $this->session->userdata('username'));
        $data['kategori'] = $this->Kategori_model->ambilData();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('isi', 'Isi Cerita', 'required|trim', [
            'required' => 'Isi Cerita tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('cerita/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Cerita_model->tambahData($this->input->post());
            $this->session->set_flashdata('info', '<div class="alert alert-light" role="alert">Cerita barumu berhasil ditambahkan!</div>');
            redirect('ceritaku');
        }
    }

    public function edit($id)
    {

        $data['judul'] = 'Edit Cerita';
        $data['user'] = $this->User_model->cekData('username', $this->session->userdata('username'));
        $data['cerita'] = $this->Cerita_model->cekData('id', $id);
        $data['kategori'] = $this->Kategori_model->ambilData();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', [
            'required' => 'Judul tidak boleh kosong'
        ]);

        $this->form_validation->set_rules('isi', 'Isi Cerita', 'required|trim', [
            'required' => 'Isi Cerita tidak boleh kosong'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('cerita/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Cerita_model->edit();
            $this->session->set_flashdata('info', '<div class="alert alert-light" role="alert">Ceritamu berhasil dirubah!</div>');
            redirect('ceritaku');
        }
    }

    public function hapus($id)
    {
        $this->db->delete('cerita', ['id' => $id]);
        $this->session->set_flashdata('info', '<div class="alert alert-light" role="alert">Ceritamu berhasil dihapus!</div>');
        redirect('ceritaku');
    }
}
