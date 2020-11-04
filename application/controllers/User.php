<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function index()
  {
    $data['judul'] = "Beranda | Daftar Kategori";
    $data['kategori'] = $this->db->get_where('kategori')->result_array();
    $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

    $this->load->view('templates/header');
    $this->load->view('templates/navbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }
}
