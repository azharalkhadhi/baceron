<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ceritaku extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'List Ceritaku';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('cerita/listCeritaku');
        $this->load->view('templates/auth_footer');
    }
}