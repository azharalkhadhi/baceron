<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
  public function cekData($field, $data)
  {
    return $this->db->get_where('user', [$field => $data])->row_array();
  }

  public function daftarAkun($data)
  {
    $data = [
      'username' => $data['username'],
      'email' => $data['email'],
      'password' => password_hash($data['password'], PASSWORD_DEFAULT)
    ];
    $this->db->insert('user', $data);
  }
}
