<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // ini guna nya supaya ketika user sudah login gabisa nge akses form login
        if (!$this->session->userdata('id_user')) {
            redirect('auth/signin');
        }
    }
    public function index()
    {
        $data['judul'] = "Kategori Beranda";

        $data['kategori'] = $this->db->get_where('kategori')->result_array();
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();


        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('kategori/daftarKategori');
        $this->load->view('templates/auth_footer');
    }
    public function daftarCerita($id)
    {
        $data['judul'] = "Daftar Cerita";
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $data['cerita'] = $this->db->get_where('cerita', ['id_kategori' => $id])->result_array();
        $data['kategori'] = $this->db->get_where('kategori', ['id_kategori' => $id])->row_array();

        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('kategori/daftarCerita', $data);
        $this->load->view('templates/auth_footer');
    }
    public function bacaCerita($id)
    {
        $data['judul'] = "Cerita";
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $data['cerita'] = $this->db->get_where('cerita', ['id' => $id])->row_array();

        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('kategori/bacaCerita', $data);
        $this->load->view('templates/auth_footer');
    }

}
