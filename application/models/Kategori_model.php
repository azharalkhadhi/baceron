<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
  public function cekData($field, $data)
  {
    return $this->db->get_where('kategori', [$field => $data])->row_array();
  }

  public function ambilData()
  {
    return $this->db->get('kategori')->result_array();
  }

  public function tambahData($data)
  {
    $data = [
      'nama_kategori' => $data['nama_kategori'],
    ];
    $this->db->insert('kategori', $data);
  }
}
