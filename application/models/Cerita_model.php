<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cerita_model extends CI_Model
{
  public function cekData($field, $data)
  {
    return $this->db->get_where('cerita', [$field => $data])->row_array();
  }

  public function ambilData($field, $data)
  {
    return $this->db->get_where('cerita', [$field => $data])->result_array();
  }

  public function tambahData($data)
  {
    $id_user = $this->User_model->cekData('username', $this->session->userdata('username'));
    $data = [
      'judul' => htmlspecialchars($data['judul']),
      'isi' => $data['isi'],
      'penulis' => $id_user['id_user'],
      'id_kategori' => $data['id_kategori']
    ];

    $this->db->insert('cerita', $data);
  }

  public function edit()
  {
    $config = [
      'judul' => htmlspecialchars($this->input->post('judul', true)),
      'isi' => $this->input->post('isi', true),
      'id_kategori' => $this->input->post('id_kategori', true)
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('cerita', $config);
  }
}
