<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TentangKami extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Tentang Kami';
        $data['user'] = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();

        $this->load->view('templates/auth_header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('tentangkami/tentangkami');
        $this->load->view('templates/auth_footer');
    }
}
